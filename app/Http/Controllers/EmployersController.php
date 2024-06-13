<?php

namespace App\Http\Controllers;

use App\Models\Employers;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employers $employers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employers $employers)
    {
        return view('employers.edit');
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employers $employers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employers $employers)
    {
        //
    }
}
