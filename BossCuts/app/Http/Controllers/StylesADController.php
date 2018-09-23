<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;

class StylesADController extends Controller
{
    /************************************
     * Display a listing of the style.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $styles = Style::visible()->get();
        return view('stylesAD.index', compact('styles'));
    }
    /*****************************************
     * Show the form for creating a new style.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stylesAD.create');
    }
    /****************************************
     * Store a newly created style in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $style = $this->validate(request(), [
            'st_name' => 'bail|required|min:3|max:30',
            'st_description' => 'required|min:10|max:100',
            'st_duration' => 'bail|required|integer',
            'st_cost' => 'bail|required|regex:/^\d*(\.\d{1,2})?$/',
            ]);
        $style['st_visibility'] = 1;
        Style::create($style);
        return redirect('stylesAD')->with('success','The new style has been created');
    }

    /**************************************************
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $style = Style::find($id);
        //DD($style);
        return view('stylesAD.edit', compact('style', 'id'));
    }
    /*******************************************
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $style = Style::find($id);
        $this->validate(request(), [
            'st_name' => 'bail|required|min:3|max:30',
            'st_description' => 'required|min:10|max:100',
            'st_duration' => 'bail|required|integer',
            'st_cost' => 'bail|required|regex:/^\d*(\.\d{1,2})?$/',
        ]);
        $style->st_name = $request->get('st_name');
        $style->st_description = $request->get('st_description');
        $style->st_duration = $request->get('st_duration');
        $style->st_cost = $request->get('st_cost');
        $style->save();
        return redirect('stylesAD')->with('success','Style was updated successfully');
    }
    /********************************************
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DD("Got to delete");
        $style = Style::find($id);
        $style->st_visibility = 0;
        $style->save();
        return redirect('stylesAD')->with('success', 'Post was deleted successfully');
    }
}
