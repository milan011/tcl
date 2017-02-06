<?php
namespace App\Repositories\Brand;

use App\Brand;
use Session;
use Illuminate\Http\Request;
use Gate;
use Datatables;
use Carbon;
use PHPZen\LaravelRbac\Traits\Rbac;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;
use Debugbar;
use App\Services\UploadsManager;
use Illuminate\Support\Facades\File;

class BrandRepository implements BrandRepositoryContract
{
    protected $manager; //文件上传类实例

    public function __construct(UploadsManager $manager)
    {
        $this->manager = $manager;
    }

    // 根据ID获得品牌信息
    public function find($id)
    {
        return Brand::select(['id', 'name', 'logo_img', 'sort', 'status', 'recommend', 'frist_letter'])
                    ->findOrFail($id);
    }

    // 获得品牌列表
    public function getAllBrands()
    {   
        return Brand::paginate(10);
    }

    // 创建品牌
    public function create($requestData)
    {   
        $requestData['creater_id'] = Auth::id();

        switch ($requestData->brand_type) { //根据品牌类别确定pid
            case '0': //顶级品牌
                $requestData['pid'] = 0;
            break;
            case '1': //一级品牌                    
                $requestData['pid'] = $requestData->pid[0];
            break;
            case '2': //二级品牌
                $requestData['pid'] = $requestData->pid[1];
            break;
            default:
                # code...
            break;
        }

        if($requestData->hasFile('logo_img')){  //如果有上传图片

            // 文件是否上传成功
            $file = $requestData->file('logo_img');
            
            // $this->manager->saveFile('car', 'hehe');

            if ($file->isValid()) {

                $uploads_file = $this->manager; //获取文件处理对象
                $uploads_file->setUploadDir('uploads_brand'); //定义上传路径

                // 获取文件相关信息
                $filename = $file->getClientOriginalName(); // 文件原名
                $ext      = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type     = $file->getClientMimeType();     // image/jpeg

                // dd($originalName);
                // dd($ext);
                // dd($realPath);
                // dd($type);
                // dd(uniqid());
                // 上传文件
                // $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                // $filename = $originalName;
                // 使用我们新建的uploads本地存储空间（目录）
                // $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                $bool = $uploads_file->saveFile($filename, file_get_contents($realPath));
                // dd($bool);
                $input =  array_replace($requestData->all(), ['logo_img'=>"$filename"]);
            }
        }else{
            
            $input =  array_replace($requestData->all());
        }

        // dd($input);

        $Brand = new Brand();
        
        $Brand->fill($input);

        $Brand = $Brand->create($input);

        Session::flash('sucess', '添加品牌成功');
        return $Brand;
    }

    // 修改品牌
    public function update($requestData, $id)
    {
        $brand  = Brand::findorFail($id);
        // dd($requestData->all());

        if($requestData->hasFile('logo_img')){  //如果有上传图片

            // 文件是否上传成功
            $file = $requestData->file('logo_img');
            
            // $this->manager->saveFile('car', 'hehe');

            if ($file->isValid()) {

                $uploads_file = $this->manager; //获取文件处理对象
                $uploads_file->setUploadDir('uploads_brand'); //定义上传路径

                // 获取文件相关信息
                $filename = $file->getClientOriginalName(); // 文件原名
                $ext      = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type     = $file->getClientMimeType();     // image/jpeg
                $bool     = $uploads_file->saveFile($filename, file_get_contents($realPath));

                $input    =  array_replace($requestData->all(), ['logo_img'=>"$filename"]);
            }
        }else{
            
            $input =  array_replace($requestData->all());
        }

        // dd($input);
        $brand->fill($input)->save();
        // dd($Brand->toJson());
        Session::flash('sucess', '修改品牌成功');
        return $brand;
    }

    // 删除品牌
    public function destroy($id)
    {
        try {
            $brand = Brand::findorFail($id);
            $brand->delete();
            Session::flash('sucess', '删除品牌成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除品牌失败');
        }      
    }

    //获得子品牌
    public function getChildBrand($brand_id){

        return Brand::select(['id', 'pid', 'name', 'logo_img'])
                    ->where('pid', $brand_id)
                    ->where('status', '1')
                    ->get();
    }

    //获得指定品牌的父品牌
    protected function getParentBrand($brand_id){

        $pid = Brand::select('id', 'pid')
                    ->where('id', $brand_id)
                    ->first();
        // dd($pid->pid);
        return Brand::select(['id', 'pid', 'name', 'logo_img'])
                    ->where('id', $pid->pid)
                    ->where('status', '1')
                    ->first();
    }

    //获得指定品牌的品牌树(递归获取该品牌所有子品牌及父品牌)
    public function getBrandTree($brand_id){

        $brandTree['child']  = $this->getAllChild($brand_id);
        $brandTree['parent'] = $this->getAllParent($brand_id);
        // dd($brandTree);
        return $brandTree;
    }

    //获得指定品牌下所有子品牌
    protected function getAllChild($brand_id, $lev=1){

        $child = array();

        if($this->haveChildBrand($brand_id)){

            $brand_info = $this->getChildBrand($brand_id)->toArray();

            foreach ($brand_info as $key => $value) {
                
                $child[$key]        = $value;
                $child[$key]['lev'] = $lev;
            }

            foreach ($brand_info as $key => $value) {

                $child = array_merge($child, $this->getAllChild($value['id'], $lev+1));
            } 
        }   

        return $child;
    }

    //获得指定品牌的所有父品牌
    protected function getAllParent($brand_id, $lev=1){

        $parent = array();
        // dd($brand_id);
        // dd(!$this->isTopBrand($brand_id));
        $brand_info = $this->getParentBrand('98');
        // dd(lastSql());
        // dd($brand_info);
        if(!$this->isTopBrand($brand_id)){
            // dd('hehe');
            $brand_info = $this->getParentBrand($brand_id)->toArray();
            // $brand_info = $this->getParentBrand($brand_id);
            /*p($brand_id);
            p($brand_info);
            p(lastSql());*/
            $brand_info['lev'] = $lev;   
            $parent[]          = $brand_info;

            $parent = array_merge($parent, $this->getAllParent($brand_info['id'], $lev+1));

        }   
        // dd($parent);
        return $parent;
    }

    //判断该品牌是否有下级品牌
    protected function haveChildBrand($brand_id){

        $child = $this->getChildBrand($brand_id);
        /*p(lastSql());
        dd($child);*/
        if($child->count() != 0){

            return true;
        }else{

            return false;
        }
    }

    //判断该品牌是否为顶级品牌
    protected function isTopBrand($brand_id){

        $pid = Brand::select('pid')->find($brand_id);
        /*p(lastSql());
        dd($pid->pid);*/
        if($pid->pid == 0){
            return true;
        }else{
            return false;
        }
    }

}
