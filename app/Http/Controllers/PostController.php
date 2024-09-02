<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at', 'DESC')->paginate(20);
       return view('Admin.partial.post.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("Admin.partial.post.postadd");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data, including the image
    // $request->validate([
    //     'title' => 'required|string|max:255',
    //     'discaption' => 'required|string|max:1000',
    //     'postcatagory' => 'required|string|max:255',
    //     'postauthor' => 'required|string|max:255',
    //     'poststatus' => 'required|string|max:255',
    //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate the image
    // ]);

//   dd($request->all());
    $data = new Post;
    


    $data->title = $request->title;
    $data->discaption = $request->discaption;
    $data->catagory_id = $request->catagory_id;
    $data->tag_id = $request->tag_id;
    $data->status_id = $request->status_id;
    // $data->slug = Str::slug($request->title, '_');

   
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $data->image = $imageName; 
    }


    $data->save();

    
    return redirect()->route('post.index')->with('success', 'Post created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
