<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;
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
        $libraries = Library::orderBy('created_at', 'desc')->take(5)->get();
        return view ('welcome', compact('libraries'));
        }

        public function dashboard(){
            return view('auth.dashboard');
        }
    }

    

