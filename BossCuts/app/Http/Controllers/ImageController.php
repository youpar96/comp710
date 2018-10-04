<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Image;

class ImageController extends Controller
{
    public function index(){
        $images=DB::table('images')->orderByRaw('created_at DESC')->get();
        return view('front.gallery', compact('images'));
    }
    
    public function indexForAdmin(){
        $images=DB::table('images')->orderByRaw('created_at DESC')->get();
        return view('admin.gallery', compact('images'));
    }
    
    public function uploadImages(Request $request){
        if($request->hasFile('images')) {
            $fileIndex = 0;
            $filePath = "files";
            
            $files = $request->file('images');

            foreach ($files as $file) {
               $fileName = now()->format('d-m-Y_his')."_".$fileIndex.".".$file->getClientOriginalExtension();
               
               // store the file
               $file->move($filePath, $fileName);
               
               // set Image model
               $image = new Image;
               $image->img_path = "/".$filePath."/".$fileName;
               $image->img_visible = true;
               $image->img_carousel = false;
               $image->img_video_ind = false;
               $image->img_st_id = null;
               
               $image->save();
               
               $fileIndex++;
            }
            
            echo $fileIndex;
        }
        
        return redirect()->route('admin.gallery')->with('success', 'The new image(s) has been registered');;
    }
    
    public function updateImage(Request $request, $id){
        $image = Image::find($id);
        $opt = request()->get('opt');
        
        if($opt == "V"){
            $image->img_visible = $request->get("val");
        }
        
        if($opt == "C"){
            $image->img_carousel = $request->get("val");
        }
        
        $image->save();
        
        return redirect()->route('admin.gallery')->with('success', 'The image has been updated');
    }
    
    public function deleteImage(Request $request, $id){
        $image = Image::find($id);
        
        $image->delete();
        
        return redirect()->route('admin.gallery')->with('success', 'The image has been deleted');
    }
}
