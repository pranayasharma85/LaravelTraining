<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types=Type::all();
        return view('backend.type.index',compact('types'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'backend.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeCreateRequest $request)
    {
        $type =  Type::create($request->all());
        dd($type);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type=Type::find($id);
        return view('backend.type.show',compact('type'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $typeId)
    {
        $type=Type::find($typeId);
        return view('backend.type.edit', compact('type'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $typeId)
    {
        $type =Type::find($typeId);
        $type->update($request->all());
        return redirect()->route('backend.type.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $typeId)
    {
        $type=Type::find($typeId);
        $type->delete();
        return redirect()->route('backend.type.index');
        //
    }
}
