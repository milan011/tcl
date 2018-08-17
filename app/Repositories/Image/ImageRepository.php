<?php

namespace App\Repositories\Image;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use App\Image;


class ImageRepository implements ImageRepositoryContract
{
    public function upload( $form_data )
    {
        // p($form_data['car_id']);exit;
        $validator = Validator::make($form_data, Image::$rules, Image::$messages);

        if ($validator->fails()) {

            return Response::json([
                'error' => true,
                'message' => $validator->messages()->first(),
                'code' => 400
            ], 400);

        }

        $photo = $form_data['file'];

        $originalName = $photo->getClientOriginalName();
        $extension = $photo->getClientOriginalExtension();
        $originalNameWithoutExt = substr($originalName, 0, strlen($originalName) - strlen($extension) - 1);
        
        $filename = $this->sanitize($originalNameWithoutExt);
        $filename = preg_replace('/[\x{4e00}-\x{9fa5}]/iu',"",$filename);
        $allowed_filename = $this->createUniqueFilename( $filename, $extension );

        $uploadSuccess1 = $this->original( $photo, $allowed_filename, $form_data['car_id']);

        $uploadSuccess2 = $this->icon( $photo, $allowed_filename );

        if( !$uploadSuccess1 || !$uploadSuccess2 ) {

            return Response::json([
                'error' => true,
                'message' => '图片上传失败',
                'code' => 500
            ], 500);

        }

        $img_dir = date('Ym', time());
        $img_dir .= '/'.'images/';
        $img_dir .= $allowed_filename; //存储的图片包含路径信息
        $sessionImage = new Image;
        $sessionImage->filename      = $img_dir;
        // p($img_dir);exit;
        $sessionImage->original_name = $originalName;
        $sessionImage->car_id        = $form_data['car_id'];
        // dd('hehe');
        $sessionImage->save();

        return Response::json([
            'error' => false,
            'code'  => 200,
            'filename' => $allowed_filename
        ], 200);

    }

    public function createUniqueFilename( $filename, $extension )
    {
        $full_size_dir = Config::get('images.full_size');
        $full_image_path = $full_size_dir . $filename . '.' . $extension;

        if ( File::exists( $full_image_path ) )
        {
            // Generate token for image
            $imageToken = substr(sha1(mt_rand()), 0, 5);
            return $filename . '-' . $imageToken . '.' . $extension;
        }

        return $filename . '.' . $extension;
    }

    /**
     * Optimize Original Image
     */
    public function original( $photo, $filename, $car_id )
    {
        $manager = new ImageManager();
        $url = asset('img/photo.jpg');

        $img_size   = getimagesize($photo);
        $img_width  = $img_size[0];
        $img_height = $img_size[1];
        $img_bili   = round((($img_width)/($img_height)) ,2);

        /*p($img_bili);
        p($img_width);
        p($img_height);
        dd(getimagesize($photo));*/
        // dd($photo);
        /*p($filename);
        p(Config::get('images.full_size'));
        p(Config::get('images.icon_size'));exit;*/
        // $image = $manager->make( $photo )->save(Config::get('images.full_size') . $filename ); //无处理
        // $image = $manager->make( $photo )->resize(800, 600)->insert('images/warter_img.png', 'bottom-right', 15, 10)->save(Config::get('images.full_size') . $filename ); // 图片为800*600并加水印
        // $image = $manager->make( $photo )->resize((960*$img_bili), 960)->save(Config::get('images.full_size') . $filename );
        // 
        if($img_bili < 1){
            //图片为手机竖拍
            throw new \App\Exceptions\ImageException($car_id);
            // redirect()->route('admin.image.error');
        }

        $image = $manager->make( $photo )->resize((600*$img_bili), 600)->resizeCanvas(800, 600, 'center', false)->insert('images/water_img.png', 'bottom-right', 0, 2)->save(Config::get('images.full_size') . $filename );

        return $image;
    }

    /**
     * Create Icon From Original
     */
    public function icon( $photo, $filename )
    {
        $manager = new ImageManager();
        $image = $manager->make( $photo )->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
            })
            ->save( Config::get('images.icon_size')  . $filename );

        return $image;
    }

    /**
     * Delete Image From Session folder, based on server created filename
     */
    public function delete($requestData)
    {

        $full_size_dir = Config::get('images.full_size');
        $icon_size_dir = Config::get('images.icon_size');
        $base_dir      = Config::get('images.base_size');

        /*p($full_size_dir);
        p($icon_size_dir);*/
        // dd($requestData->all());
        if(empty($requestData->img_car_id)){

            $sessionImage = Image::where('original_name', $requestData->img_name)
                             ->orderBy('created_at', 'DESC')
                             ->first();
        }else{

            $sessionImage = Image::where('filename', $requestData->img_name)
                             ->where('car_id', $requestData->img_car_id)
                             ->orderBy('created_at', 'DESC')
                             ->first();
        }
        
        // dd($sessionImage);
        if(empty($sessionImage))
        {
            return Response::json([
                'error' => true,
                'code'  => 400,
                'msg'   => '图片不存在'
            ], 400);

        }

        /*$full_path1 = $full_size_dir . $sessionImage->filename;
        $full_path2 = $icon_size_dir . $sessionImage->filename;*/

        $full_path1 = $base_dir . $sessionImage->filename;
        $full_path2 = $base_dir . $sessionImage->filename;

        /*p($full_path1);
        p($full_path2);exit;*/
        if ( File::exists( $full_path1 ) )
        {
            File::delete( $full_path1 );
        }

        if ( File::exists( $full_path2 ) )
        {
            File::delete( $full_path2 );
        }

        if( !empty($sessionImage))
        {
            $sessionImage->delete();
        }

        return Response::json([
            'error' => false,
            'code'  => 200,
            'msg'   => '删除成功'
        ], 200);
    }

    function sanitize($string, $force_lowercase = true, $anal = false)
    {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
            "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
            "â€”", "â€“", ",", "<", ".", ">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;

        return ($force_lowercase) ?
            (function_exists('mb_strtolower')) ?
                mb_strtolower($clean, 'UTF-8') :
                strtolower($clean) :
            $clean;
    }
}