<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Comic $comic)
    {
        // Show the comics list
        $comics = Comic::orderByDesc('id')->get();
        //dd($posts);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Pass all the comic list to the create function in the ComicController
        $comics = Comic::all();
        // Return view with form for creating a new comic
        return view('admin.comics.create', compact('comics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        // dd($request->all());
        // Store the newly created post into the database
        // Validate data
        $validated_data = $request->validated();
        // Verify if inserted id exist in the category list -> check ComicRequest.php
        // Generate slug for new comic
        $slug = Comic::generateSlug($request->title);
        // Save the validated slug into the slug param
        $validated_data['slug'] = $slug;
        //dd($validated_data);
        // Create the new comic
        $newComic = Comic::create($validated_data);
        // Redirect to GET route
        return redirect()->route('admin.comics.index')->with('message', 'Comic Created Succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // Return the single comic by clicking on view btn
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // dd($comic);
        $comics = Comic::all();
        // Return view with the form for editing the single post
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        // Return the updated data from the single comic
        // Create the variable with the validated data
        $validated_data = $request->validated();
        // Generate slug with the comic title by defining a function for the Str in the
        $slug = Comic::generateSlug($request->title);
        // dd($slug);
        // Save the validated slug into the slug param
        $validated_data['slug'] = $slug;
        // Create instance
        $comic->update($validated_data);
        // Redirect to a GET route
        return redirect()->route('admin.comics.index')->with('message', 'Comic Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // Create a route for comic delete
        $comic->delete();
        // Redirect to a GET route
        return redirect()->route('admin.comics.index')->with('message', 'Comic Deleted Succesfully');
    }

}
