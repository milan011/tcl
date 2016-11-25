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

    // 获得门店列表
    public function getAllBrands()
    {   
        return Brand::paginate(10);
    }

    public function getAllUsersWithDepartments()
    {
        return  User::select(array
            ('users.name', 'users.id',
                DB::raw('CONCAT(users.name, " (", departments.name, ")") AS full_name')))
        ->join('department_user', 'users.id', '=', 'department_user.user_id')
        ->join('departments', 'department_user.department_id', '=', 'departments.id')
        ->lists('full_name', 'id');
    }

    // 创建门店
    public function create($requestData)
    {   
        $requestData['creater_id'] = Auth::id();
        
        if($requestData->hasFile('logo_img')){  //如果有上传图片

            // 文件是否上传成功
            $file = $requestData->file('logo_img');
            
            // $this->manager->saveFile('car', 'hehe');

            if ($file->isValid()) {

                $uploads_file = $this->manager; //获取文件处理对象
                $uploads_file->setUploadDir('uploads_brand'); //定义上传路径

                // 获取文件相关信息
                $filename = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type = $file->getClientMimeType();     // image/jpeg

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

        $Brand = new Brand();
        
        $Brand->fill($input);

        $Brand = $Brand->create($input);

        Session::flash('sucess', '添加品牌成功');
        return $Brand;
    }

    // 修改门店
    public function update($requestData, $id)
    {
        
        $Brand  = Brand::findorFail($id);
        $input =  array_replace($requestData->all());
        $Brand->fill($input)->save();
        // dd($Brand->toJson());
        Session::flash('sucess', '修改门店成功');
        return $Brand;
    }

    // 删除门店
    public function destroy($id)
    {
        try {
            $Brand = Brand::findorFail($id);
            $Brand->delete();
            Session::flash('sucess', '删除门店成功');
           
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('faill', '删除门店失败');
        }      
    }
}
