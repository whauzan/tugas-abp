<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function index (Request $req) {
        $message = '';
        $req->validate([
            'image_upload' => 'image|mimes:jpg|max:500'
        ],
        [
            'image_upload.max' => 'Ukuran file maksimal 500 KB',
            'image_upload.mimes' => 'Tipe file hanya boleh JPG'
        ]);
        if (!empty($req->file('image_upload'))) {
            $fileName = time().'_'. $req->file('image_upload')->getClientOriginalName();
            $req->file('image_upload')->storeAs('images',$fileName,'public_uploads');
            $message = 'Upload berhasil';
        } 
        return view('uploadForm',['message'=>$message]);
    }
}
