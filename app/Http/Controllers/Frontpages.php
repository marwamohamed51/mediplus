<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = 'MediPlus Website';
        // return blade file
        return view('home', compact('title'));
    }

    public function error404(){
        $title = 'MediPlus 404';
        // return blade file
        return view('error404', compact('title'));
    }

    public function portfolio(){
        $title = 'Doctors Portfolio';
        // return blade file
        return view('portfolio', compact('title'));
    }

    public function contact(){
        $title = 'Contact US';
        // return blade file
        return view('contact', compact('title'));
    }

    public function blog(){
        $title = 'Blog Single';
        // return blade file
        return view('blog', compact('title'));
    }

    public function services(){
        $title = 'MadiPlus Services';
        // return blade file
        return view('services', compact('title'));
    }
}
