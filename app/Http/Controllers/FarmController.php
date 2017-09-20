<?php

namespace market\Http\Controllers;

use Illuminate\Http\Request;

use market\Http\Requests;
use market\Farm;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$farms = Farm::all();
        $farms = Farm::orderBy('name', 'asc')->paginate(9);
        //return view('farms.index', compact('farms')); 
        return view('farms.index', ['farms' => $farms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('farms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|unique:farms|max:255',
            'website' => 'bail|required',
            'city' => 'bail|required'
            ]);

        Farm::create($request->all() );
        return redirect('farms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        return view('farms.show', ['farm' => $farm]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Farm $farm)
    {
        $markets = market\Market::get()->pluck('name', 'id')->sortBy('name');
        return view('farms.edit', compact('farm', 'market'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $farm->update($request->all() );
        $farm->markets->sync($request->markets);
        return redirect('farms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
