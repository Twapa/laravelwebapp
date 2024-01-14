<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\posts;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        // $id = 7;
        // $posts = DB::table('posts')
        // ->where('id',$id)
        // ->get();
        $posts = posts::all();
        


        dd($posts);
        return view('blog.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new posts();
        $post->name = $request->name;
        $post->type = $request->type;
        $post->base = $request->base;
        $post->toppings = $request->toppings;
        $post->save();
        return redirect('/')->with('mssg', 'Post created successfully')
            ->with('type', $request->type)
            ->with('name', $request->name)
            ->with('base', $request->base)
            ->with('toppings', $request->toppings);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $post = posts::findOrFail($id);

        return view('blog.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
