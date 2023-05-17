<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courses;
use App\Models\Content;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function welcome()
    {
        $home = DB::select('SELECT *  FROM `contents` WHERE `title` LIKE \'Home\';');
        return view('welcome',['home' => $home]);
    }
     public function about()
     {
        $home = DB::select('SELECT *  FROM `contents` WHERE  `title` LIKE \'Home\';');
        return view('about',['home' => $home]);
     }

     public function contact()
     {
    //     $home = DB::select('SELECT *  FROM `contents` WHERE `title` LIKE \'CONTACT\';');
    //     return view('contact',['home' => $home]);
           return view('contact');
     }
    
}
