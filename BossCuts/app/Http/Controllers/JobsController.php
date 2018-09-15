<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->flash();
        dd($request);
        if ($request->hasFile('cvUpload'))  {
            $request->validate([
            'cvUpload' => 'file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->cvUpload->getClientOriginalExtension();
        } else {
            $fileName = null;
        }
        $job = $this->validate(request(), [
            'j_fname' => 'required|min:3|max:30',
            'j_sname' => 'required|min:3|max:30',
            'j_email' => 'required|email',
            'j_phone' => 'required|min:7|max:20',
            'j_pref_cont_meth'=> 'required|in:txt,phone,email',
        ]);
        if($fileName !== null) {
            $job['j_cvpath']  = $fileName;
            $request->cvUpload->storeAs('jobAppl',$fileName);   
        }
        Job::create($job);
        return redirect('jobs/landing')->with('success','We have received your application and will contact you ...');
    }
    public function uploadCoverLetter(Request $request){
        $request->validate([
        ]);
        $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();
        $request->fileToUpload->storeAs('jobAppl',$fileName);
 
        return back()
            ->with('success','You have successfully upload image. Filename');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
