<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Input as Input;

class UploadController extends Controller
{
    public function upload(){
        if(Input::hasfile('file')){
            echo 'Uploaded Image<br />';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            echo '<img src="uploads/' . $file->getClientOriginalName() . '" />';
        }
    }
}
