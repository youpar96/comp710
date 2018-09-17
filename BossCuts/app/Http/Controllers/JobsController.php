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
        $workType = $request->old('work_type');
        $workDays = $request->old('work_days');
        if($workType !== null) {
            if(in_array('fulltime',$workType)) $request->session()->flash('fulltime', '1');
            if(in_array('parttime',$workType)) $request->session()->flash('parttime', '1');
            if(in_array('casual',$workType)) $request->session()->flash('casual', '1'); 
        }
        if($workDays !== null) {
            if(in_array('weekdays',$workDays)) $request->session()->flash('weekdays', '1');
            if(in_array('saturdays',$workDays)) $request->session()->flash('saturdays', '1');
            if(in_array('sundays',$workDays)) $request->session()->flash('sundays', '1'); 
        }
        if ($request->hasFile('cvUpload'))  {
            $request->validate([
            'cvUpload' => 'file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->cvUpload->getClientOriginalExtension();
        } else {
            $fileName = null;
        }
        $job = $this->validate(request(), [
            //'j_fname' => 'required|min:3|max:30',
            //'j_sname' => 'required|min:3|max:30',
            //'j_email' => 'required|email',
            //'j_phone' => 'required|min:7|max:20',
            //'j_pref_cont_meth'=> 'required|in:txt,phone,email',
            'j_avail_date' => 'date',
            'work_type' => 'required',
            'work_days' => 'required',
            'j_workinNZ' => 'required|in:citPR,visa,noVisa',
            'j_issue_movement'=> 'required|in:1,0',
            'j_issue_skin'=> 'required|in:1,0',
            'j_issue_rsi'=> 'required|in:1,0',
        ]);
        if($fileName !== null) {
            $job['j_cvpath']  = $fileName;
            $request->cvUpload->storeAs('jobAppl',$fileName);   
        }
        //dd($job);
        
        if(in_array('fulltime',$workType)) $job['j_fulltime'] = true;
        if(in_array('parttime',$workType)) $job['j_parttime'] = true;
        if(in_array('casual',$workType)) $job['j_casual'] = true;
        
        if(in_array('weekdays',$workType)) $job['j_weekdays'] = true;
        if(in_array('saturdays',$workType)) $job['j_saturdays'] = true;
        if(in_array('sundays',$workType)) $job['j_sundays'] = true;
        
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
