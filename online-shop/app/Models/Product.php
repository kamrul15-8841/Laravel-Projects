<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    private static $product, $image, $imageUrl, $directory, $imageName, $exceptions;
    use HasFactory;
    protected $fillable = ['category_id', 'brand_id', 'name', 'price', 'image', 'description', 'status'];

    public static function uploadImage($request)
    {
        self::$image     = $request->file('image');
//        self::$imageName = self::$image->getClientOriginalName(); //get image name with extension

        self::$exceptions = self::$image->getClientOriginalExtension(); 
        self::$imageName = time().'.'.self::$exceptions; //get image name with extension

        self::$directory = 'admin/assets/images/uploaded-files/'; //create directory
        self::$image->move(self::$directory, self::$imageName); //move to project folder
        return self::$directory.self::$imageName; //product-images/image.jpg
    }

    public static function createOrUpdateProduct($request, $id = null)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::uploadImage($request);
        }
        else
        {
            if (self::$product)
            {
                self::$imageUrl = self::$product->image;
            }
            else
            {
                self::$imageUrl = null;
            }
//            self::$imageUrl = self::$product->image;
        }
        Product::updateOrCreate(['id'=> $id], [
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'price' => $request->price,
            'image' => self::$imageUrl,
//            'image' => self::uploadImage($request),
            'description' => $request->description,
            'status' => $request->status,
        ]);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
       return $this->belongsTo(Brand::class);
    }
}
