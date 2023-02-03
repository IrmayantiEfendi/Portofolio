<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;

class ResumeController extends Controller
{
    public function index(){
    	return view('Resume.index');
    }

    public function getFile(){
    	$filepath = public_path('file/Ade irmayanti - Resume.pdf');
    	return Response::download($filepath);
    }
}
