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
        return view('Admin.partial.catagorypage.catagory');
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
        $this->validate($request,[

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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catagory $catagory)
    {
        //
    }
}
