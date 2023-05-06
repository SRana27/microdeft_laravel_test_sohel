<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $imageNewName, $imageUrl, $directory;


    public static function saveblog($request)
    {
        if ($request->blog_id) {
            self::$blog = Blog::find($request->blog_id);
        } else {
            self::$blog = new Blog();
        }

        self::$blog->title = $request->title;
        self::$blog->description = $request->description;
        if ($request->image) {
            if (file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
            self::$blog->image = self::saveImg($request);
        }


        self::$blog->tag = $request->tag;
        self::$blog->save();


    }

    private static function saveImg($request){
        self::$image= $request->file('image');
        self::$imageNewName='category-'.rand().'.'.self::$image->Extension();
        self::$directory='upload-image/blog/';
        self::$imageUrl=self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imageUrl;

    }
}
