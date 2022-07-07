<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Worlds;
use Illuminate\Http\Request;

class world extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $world = Worlds::all();
        return view('world.index')->with('world', $world);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('world.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Worlds::create($input);
        return redirect('world');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function show($ID)
    {
        $world = Worlds::find($ID);
        return view('world.show')->with('world', $world);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function edit($ID)
    {
        $world = Worlds::find($ID);
        return view('world.edit')->with('world', $world);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ID)
    {
        $world = Worlds::find($ID);
        $input = $request->all();
        $world->update($input);
        return redirect('world');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function destroy($ID)
    {
        Worlds::destroy($ID);
        return redirect('world');
    }
}
