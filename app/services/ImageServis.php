<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImageServis
{
    public function allImage($var = null)
    {
        $images = DB::table('images')->select('*')->get();
        $image = $images->all();
        return $image;
    }
    public function add($image)
    {
        $fileName = $image->store('upload');

        DB::table('images')->insert(
            ['image' => $fileName]
        );
    }
    public function one($id)
    {
        $image = DB::table('images')->select('*')->where('id', $id)->first();
        return $image;
    }

    public function update($id, $src, $image)
    {
        Storage::delete($src);
        $fileName = $image->store('upload');
        DB::table('images')
        ->where('id', $id)
        ->update(['image' => $fileName]);
    }

    public function delate($id)
    {
        $image = $this->one($id);
        Storage::delete($image->image);
        DB::table('images')->where('id', $id)->delete();

    }
}
