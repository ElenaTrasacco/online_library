<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return[
            new Middleware('auth', only:['dashboard'])
        ];
    }

    public function home(){
        $categories = Category::all();
        $libraries = Library::orderBy('created_at', 'desc')->take(5)->get();
        return view ('welcome', compact('libraries', 'categories'));
        }


        public function dashboard(){
            return view('auth.dashboard');
        }
    }

    

