<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MimeTyper\Repository\MimeDbRepository;

class CobaController extends Controller
{
    public function photo($id){
        $file = null;
        // check if file exists
        if(Storage::exists('public/'.$id.'/')){
            $files = Storage::files('public/'.$id.'/');
            if(count($files) > 0)
                $file = $files[0];
        }
        // if file doesn't exists
        if($file == null)
            abort(404);
        // write file response
        $file_array_dot = explode(".", $file);
        $ext = $file_array_dot[count($file_array_dot)-1];
        $mime = new MimeDbRepository();
        return response(Storage::get($file))->header('Content-Type', $mime->findType($ext));
    }
}
