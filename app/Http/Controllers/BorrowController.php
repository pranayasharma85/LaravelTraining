<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Borrow;
use App\Models\Student;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows=Borrow::all();
        return view('backend.borrow.index',compact('borrows'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'backend.borrow.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BorrowCreateRequest $request)
    {
        $borrow =  Borrow::create($request->all());
        dd($borrow);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $borrow=Borrow::find($id);
        return view('backend.borrow.show',compact('borrow'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $borrowId)
    {
        $borrow = Borrow::find($borrowId);
        return view('backend.borrow.edit', compact('borrow'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $borrowId)
    {
        $borrow =Borrow::find($borrowId);
        $borrow->update($request->all());
        return redirect()->route('backend.borrow.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $borrowId)
    {
        $borrow=Borrow::find($borrowId);
        $borrow->delete();
        return redirect()->route('backend.borrow.index');


        //
    }
}
