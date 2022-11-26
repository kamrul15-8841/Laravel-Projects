<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher;
    private static $products, $product, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image     = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName(); //get image name with extension
        self::$directory = 'blog-images/'; //create directory
        self::$image->move(self::$directory, self::$imageName); //move to project folder
        return self::$directory.self::$imageName; //product-images/image.jpg
    }


    public static function newProduct ($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name        = $request->name;
        self::$teacher->code        = '';
        self::$teacher->email        = $request->email;
        self::$teacher->mobile = $request->mobile;
        self::$teacher->address = $request->address;
        self::$teacher->image       = '';
        self::$teacher->save();
    }
}
