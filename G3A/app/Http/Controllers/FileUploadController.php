<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{

    //essaie de l'implémentation de cloudinary
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeUploads(Request $request)
    {
        cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath();

        //dd($response);

        return back()
            ->with('success', 'File uploaded successfully');
    }

    // public function storeUploads(Request $request)
    // {
    //     $request->file('file')->store('images');

    //     return back()
    //         ->with('success', 'File uploaded successfully');
    // }
}
