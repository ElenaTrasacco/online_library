<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreLibraryRequest;
use App\Http\Requests\UpdateLibraryRequest;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class LibraryController extends Controller implements HasMiddleware
{
    public static function middleware(){
        return [
            new Middleware('auth', only: ['create', 'edit'])
        ];}
    public function index()
    {
        $categories = Category::all();
        $library = Library::all();
        return view ('book.index', compact('library', 'categories')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

   
     /** Display the specified resource.
     */
    public function show(Library $library)
    {
        return view('book.show', compact('library'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Library $library)
    {
        if(Auth::id() == $library->user_id){
            return view('book.edit', compact('library'));
        }
        return redirect()->back()->with('denied', 'Access denied, sorry');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibraryRequest $request, Library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Library $library)
    {
        //
    }

    public function indexCategory(Category $category){
        return view('book.index-category', compact('category'));
    }
}
