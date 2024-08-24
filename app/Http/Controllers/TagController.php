<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $tags = Tag::orderBy('created_at', 'DESC')->paginate(20);

        return view('Admin.partial.tags.tag', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.partial.tags.tagadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|unique:tags,name',
        ]);

        $data = new Tag;
        $data->name = $request->name;
        $data->slug = Str::slug($request->name, '_');
        $data->discaption = $request->discaption;

        $data->save();
        toastr()->success('Data has been saved successfully!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
        return view('Admin.partial.tags.tagShow', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('Admin.partial.tags.tagEdit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        //
        $this->validate($request, [
            'name' => 'required|unique:tags,name',
        ]);

        $tag->name = $request->name;
        $tag->slug = Str::slug($request->name, '_');
        $tag->discaption = $request->discaption;

        $tag->save();
        toastr()->success('Data has been update successfully!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        //
        $tag->delete();
        toastr()->success('Delete Successfull');

        return redirect()->route('tag.index');
    }
}
