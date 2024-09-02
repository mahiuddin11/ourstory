<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;


class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $status = Status::orderBy('created_at', 'DESC')->paginate(20);
        return view('Admin.partial.postatus.status',compact('status')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.partial.postatus.statusadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Status;
        $data->name = $request->name;

        $data->save();

        toastr()->success('Data has been saved successfully!');
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
    }
}
