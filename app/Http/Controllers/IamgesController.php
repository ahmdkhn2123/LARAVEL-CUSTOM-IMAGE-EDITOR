<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
class IamgesController extends Controller
{
    public function uploadimage(Request $request)
    {
        $imagefile=$request->photo;
        if($imagefile!=null){
            $image=$request->file('photo');
            $filename=time().'.'.$request->photo->extension();
            $imageResize=Image::make($image->getRealPath());
            $blurvalue=$request->blur;
            $fitsize=$request->fit;
            $imageResize->blur($blurvalue)->fit($fitsize);
            $imageResize->save(public_path($filename));
//            return "<img src='".$filename."'>";
            return $request->all();
        }

    }
}
