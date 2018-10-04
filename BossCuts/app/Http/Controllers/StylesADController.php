<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Style;
/*
    This controller is used for all admin related styles logic
*/
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
         $rules = [ 'st_name' => 'required|min:3|max:30',
            'st_description' => 'required|min:10|max:100',
            'st_duration' => 'required|integer|between:5,90',
            'st_cost' => 'required|numeric|between:5,149.99'
        ];
        $customMessages = [
            'st_name.required' => 'Please enter style name, it is required',
            'st_description.required' => 'Please enter style description, it is required',
            'st_minutes.required' => 'Please enter style minutes, it is required',
            'st_cost.required' => 'Please enter style cost, it is required',
            'st_duration.between' => 'Minutes must be betweem 5 and 90',
            'st_cost.between' => 'Cost must be betweem 5 and 149.99',
        ];
        $style = $this->validate($request, $rules, $customMessages);
        
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
        $rules = [ 'st_name' => 'required|min:3|max:30',
            'st_description' => 'required|min:10|max:100',
            'st_duration' => 'required|integer|between:5,90',
            'st_cost' => 'required|numeric|between:5,149.99'
        ];
        $customMessages = [
            'st_name.required' => 'Please enter style name, it is required',
            'st_description.required' => 'Please enter style description, it is required',
            'st_minutes.required' => 'Please enter style minutes, it is required',
            'st_cost.required' => 'Please enter style cost, it is required',
            'st_duration.between' => 'Minutes must be betweem 5 and 90',
            'st_cost.between' => 'Cost must be betweem 5 and 149.99',
        ];
        $this->validate($request, $rules, $customMessages);
        
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
        $style = Style::find($id);
        $style->st_visibility = 0;
        $style->save();
        return redirect('stylesAD')->with('success', 'Style was deleted successfully');
    }
}
