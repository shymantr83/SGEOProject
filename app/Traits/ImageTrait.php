<?php
 namespace App\Traits;

trait ImageTrait{
    private function uplodeImage($path, $filename, $file, $oldimage = null){
    // Check if $file is null
    if ($file === null) {
        return false; // or handle the error in some appropriate way
    }
    
    // Proceed with moving the file
    $file->move(public_path($path), $filename);
    
    if (!is_null($oldimage)){
        unlink(public_path($path.'/'.$oldimage));
    }
    return true;
}
    // private function uplodeImage($path,$filename,$file ,$oldimage=null){
  
    // $file->move(public_path($path),$filename);
    //     if(!is_null($oldimage)){
            
    //         unlink(public_path($path.'/'.$oldimage));
    //     }
    //     return true;
    // }
//     public function uploadTest(Request $request) {

//     if(!$request->hasFile('image')) {
//         return response()->json(['upload_file_not_found'], 400);
//     }
//     $file = $request->file('image');
//     if(!$file->isValid()) {
//         return response()->json(['invalid_file_upload'], 400);
//     }
//     $path = public_path() . '/uploads/images/store/';
//     $file->move($path, $file->getClientOriginalName());
//     return response()->json(compact('path'));
//  }
}




