<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catagories = Catagory::orderBy('created_at', 'DESC')->paginate(10);

        return view('Admin.partial.catagorypage.catagory', compact('catagories'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.partial.catagorypage.catagoryadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [

            'CatagoryName' => 'required|unique:catagories,CatagoryName',
        ]);

        $catagory = Catagory::create([

            'CatagoryName' => $request->CatagoryName,
            'slug' => Str::slug($request->CatagoryName, '-'),
            'discaption' => $request->discaption,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Catagory $catagory)
    {
        //
        return view('Admin.partial.catagorypage.catagoryShow', compact('catagory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        //
        return view('Admin.partial.catagorypage.catagoryEdit', compact('catagory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        // Validate the request data
        $this->validate($request, [
            'CatagoryName' => "required|unique:catagories,CatagoryName,$catagory->id"
        ]);



        $catagory->CatagoryName = $request->CatagoryName;
        $catagory->slug = Str::slug($request->CatagoryName, '-');
        $catagory->discaption = $request->discaption;

        $catagory->save();

        // Success message
        toastr()->success('Category updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
        $catagory->delete();


        toastr()->error('Category deleted successfully!');
        return redirect()->route('catagory');
    }
}
