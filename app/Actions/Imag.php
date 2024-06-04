<?php
namespace App\Actions;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Imag
{
    public function url($path = null, $dir = null)
    {
        $directory = '/app/public/blogs/';
        if ($path != null) {
            if($dir != null){
                $directory = $dir;
            }
            $filename = time() . '.jpg';
            $manager = new ImageManager(Driver::class);
            $image = $manager->read($path);
            $image->save(storage_path().$directory.$filename);
            $image->scaleDown(width: 600); // 600 x 350
            $image->save(storage_path().$directory.'s_'.$filename);
            return $filename;
        } else {
            return false;
        }
    }
}