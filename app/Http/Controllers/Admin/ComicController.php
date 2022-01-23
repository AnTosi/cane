<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comics = Comic::orderBy('id', 'desc')->paginate(12);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated_data = $request->validate(
            [
                'title'=>'required | unique:comics',
                'description'=>'nullable',
                'thumb'=>'nullable',
                'price'=>'nullable',
                'series'=>'nullable',
                'sale_date'=>'nullable',
                'type'=>'nullable'
            ]
            );
        
            Comic::create($validated_data);

            return redirect()->route('admin.comics.index')->with('feedback', 'Comic succesfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
        $validated_data = $request->validate(
            [
                'title' => [
                    'required',
                    Rule::unique('comics')->ignore($comic->id),
                ],
                'description'=>'nullable',
                'thumb'=>'nullable',
                'price'=>'nullable',
                'series'=>'nullable',
                'sale_date'=>'nullable',
                'type'=>'nullable'
            ]
            );
        
            $comic->update($validated_data);

            return redirect()->route('admin.comics.index')->with('feedback', 'Comic succesfully modified');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
        $comic->delete();
        return redirect()->route('admin.comics.index')->with('feedback', 'Comic succesfully deleted from database');

    }
}
