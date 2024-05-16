<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Templateweb extends Controller
{
    public function showindex() {
        return view('template.index');
    }
        

    public function showhome() {
        return view('template.home');
    }
    
    public function showabout() {
        return view('template.about');
    }

    
       
    //
}
