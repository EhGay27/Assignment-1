<?php

namespace App\Http\Controllers;

use App\Models\Jersey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JerseyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Jerseys = Db::select('select * from jersey');
        return view('jersey', [
            'Jerseys' => $Jerseys
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Jersey $jersey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jersey $jersey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jersey $jersey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jersey $jersey)
    {
        //
    }
}
