<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::orderByDesc('id')->get();
        return view('admin.series.index', compact('series'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => ['required', Rule::unique('series')->ignore('series')]
        ]);
        $slug = Str::slug($request->name, '-');
        $validated_data['slug'] = $slug;
        Serie::create($validated_data);
        return redirect()->back()->with('message', "Serie $slug Added Successfully");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
        $validated_data = $request->validate([
            'name' => ['required', Rule::unique('series')->ignore('series')]
        ]);
        $slug = Str::slug($request->name, '-');
        $validated_data['slug'] = $slug;
        $serie->update($validated_data);
        return redirect()->back()->with('message', "Serie $slug Modificata");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        $serie->delete();
        return redirect()->back()->with('message', "Categoria $serie->name cancellata");
    }
}
