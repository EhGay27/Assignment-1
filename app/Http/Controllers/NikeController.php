<?php

namespace App\Http\Controllers;

use App\Models\Nike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Nikes = Db::select('select * from nike');
        return view('Nike', [
            'Nikes' => $Nikes
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
    public function show(Nike $nike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nike $nike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nike $nike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nike $nike)
    {
        //
    }
}
