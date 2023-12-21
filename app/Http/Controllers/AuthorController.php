<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorCreateRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::all();
        return view('backend.author.index',compact('authors'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'backend.Author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorCreateRequest $request)
    {
//        $request->validate([
//            'name'=>'required',
//            'surname'=>'required'
//        ]);


        $author =  Author::create($request->all());
        dd($author);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author=Author::find($id);
        return view('backend.author.show',compact('author'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $authorId)
    {
        $author = Author::find($authorId);
        return view('backend.author.edit', compact('author'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $authorId)
    {
        $author = Author::find($authorId);
        $author->update($request->all());
        return redirect()->route('backend.author.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $authorId)
    {
        $author=Author::find($authorId);
        $author->delete();
        return redirect()->route('backend.author.index');


        //
    }
}
