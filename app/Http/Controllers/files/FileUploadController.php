<?php

namespace App\Http\Controllers\files;

use App\Http\Controllers\Controller;
use App\model\files\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FileUploadController extends Controller
{
    public function upload(Request $request){
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:doc,docx,pdf,txt,csv|max:2048'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 401);
        }

        $fileProfile = new File();
        if($request->file('file')){
            $name = time().'.'.$request->file->extension();
            $path = $request->file('file')->store('public/files');
            $fileProfile->path = Storage::url($path);
            $fileProfile->name=$name;
            $fileProfile->save();
        }
        return response()->json($fileProfile, 200);
    }
}
