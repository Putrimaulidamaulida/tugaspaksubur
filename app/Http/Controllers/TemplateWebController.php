<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateWebController extends Controller
{
    public function showIndex():View {
        return view('template.index');
    }
    public function showHome(){
        return view('template.home');
    }
    public function showAbout(){
        return view('template.about');
    }
    //
}
