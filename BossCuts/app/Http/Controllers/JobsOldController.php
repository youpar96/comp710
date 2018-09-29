<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Carbon\Carbon;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.intro');
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
    /*******************************************
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->flash();
//      dd($request->session());
//        if ($request->has('j_fname')) dd($request->old('j_fname'));
//        else dd("dont have first name");
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
        
        if ($request->hasFile('cvUpload') && $request->has('j_fname') && $request->has('j_sname')) {
            $request->validate([
                'cvUpload' => 'file|max:1024',
            ]);
            $fileName = $request->old('j_fname')."-".$request->old('j_sname').time().'.'.request()->cvUpload->getClientOriginalExtension();
        } else {
            $fileName = null;
        }
        $job = $this->validate(request(), [
            'j_fname' => 'required|min:3|max:30',
            'j_sname' => 'required|min:3|max:30',
            'j_prefname'=> 'min:2',
           'j_email' => 'required|email',
            'j_phone' => 'required|min:7|max:20',
            'j_pref_cont_meth'=> 'required|in:txt,phone,email',
            'j_cover_letter' => 'min:2',
//try later with multi date format    'j_avail_date' => 'date_multi_format:"d/m/Y","d-m-Y":after:Carbon::now()->subDay()',
            'j_avail_date' => 'date:"d/m/Y"|after:Carbon::now()->subDay()',
            'work_type' => 'required',
            'work_days' => 'required',
            'j_workinNZ' => 'required|in:citPR,visa,noVisa',
            'j_issue_movement' => 'required|in:1,0',
            'j_issue_skin'=> 'required',
            'j_issue_RSI'=> 'required',
            'j_issue_notes' => 'min:2',
            'j_declaration' => 'required',
        ]);
        if($fileName !== null) {
            $job['j_cvpath']  = $fileName;
            $request->cvUpload->storeAs('jobAppl',$fileName);   
        }
        if($workType !== null) {
            if(in_array('fulltime',$workType)) $job['j_fulltime'] = true;
            if(in_array('parttime',$workType)) $job['j_parttime'] = true;
            if(in_array('casual',$workType)) $job['j_casual'] = true;
        }
        if($workDays !== null) {
            if(in_array('weekdays',$workDays)) $job['j_weekdays'] = true;
            if(in_array('saturdays',$workDays)) $job['j_saturdays'] = true;
            if(in_array('sundays',$workDays)) $job['j_sundays'] = true;
        }
        $job['j_status'] = 'new';
        //DD($job);

        Job::create($job);
        return redirect('jobs')->with('success','We have received your application and will contact you ...');
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