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
            'name' => 'required|mimes:doc,docx,pdf,txt,csv|max:2048'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors()], 401);
        }

        $fileProfile = new File();
        if($request->file('name')){
            $name = time().'.'.$request->name->extension();
            $path = $request->file('name')->store('public/files');
            $fileProfile->path = Storage::url($path);
            $fileProfile->name=$name;
            $fileProfile->save();
        }
        return response()->json(['message' => $fileProfile], 200);
    }

    public function getFiles(){
        $files = File::all();
        return response()->json($files, 200);
    }

    public function downloadFiles(){
        $filePath = public_path('public/files');
        $headers = ['Content-Type: application/pdf'];
        $fileName = time().'.pdf';
        return response()->download($filePath, $fileName, $headers);
    }
}
