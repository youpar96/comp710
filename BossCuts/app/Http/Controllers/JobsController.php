<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Carbon\Carbon;
/*
    This controller is used for all public related job application logic
*/
class JobsController extends Controller
{
    /**
     * Display the intro screen for the jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.intro');
    }
    /**
     * Show the form for creating a new job application.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }
    /*******************************************
     * Store a newly created job application in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //put the request straight into flash in preparation for any error messages
        $request->flash();
        //
        //radios and checkboxes need special treatment - so prepare their flash data
        // worktype is can be one or more of fulltime parttime casual
        $workType = $request->old('work_type');
        if($workType !== null) {
            if(in_array('fulltime',$workType)) $request->session()->flash('fulltime', '1');
            if(in_array('parttime',$workType)) $request->session()->flash('parttime', '1');
            if(in_array('casual',$workType)) $request->session()->flash('casual', '1'); 
        }
        $workDays = $request->old('work_days');
        if($workDays !== null) {
            if(in_array('weekdays',$workDays)) $request->session()->flash('weekdays', '1');
            if(in_array('saturdays',$workDays)) $request->session()->flash('saturdays', '1');
            if(in_array('sundays',$workDays)) $request->session()->flash('sundays', '1'); 
        }
        //check the uploaded CV and create a filename for it
        if ($request->hasFile('cvUpload') && $request->has('j_fname') && $request->has('j_sname')) {
            $request->validate([
                'cvUpload' => 'file|max:1024',
            ]);
            $fileName = $request->old('j_fname')."-".$request->old('j_sname').time().'.'.request()->cvUpload->getClientOriginalExtension();
        } else {
            $fileName = null;
        }
        $rules = [
            'j_fname' => 'required|min:3|max:30',
            'j_sname' => 'required|min:3|max:30',
            'j_prefname'=> 'nullable',
           'j_email' => 'required|email',
            'j_phone' => 'required|min:7|max:20',
            'j_pref_cont_meth'=> 'required|in:txt,phone,email',
            'j_cover_letter' => 'min:2',
            'j_avail_date' => 'date_format:d/m/Y|after:today',
            'work_type' => 'required',
            'work_days' => 'required',
            'j_workinNZ' => 'required|in:citPR,visa,noVisa',
            'j_issue_movement' => 'required|in:1,0',
            'j_issue_skin'=> 'required',
            'j_issue_RSI'=> 'required',
            'j_issue_notes' => 'nullable',
            'j_declaration' => 'required'
        ];
        $customMessages = [
            'j_fname.required' => 'Please enter first name, it is required',
            'j_sname.required' => 'Please enter surname, it is required',
           'j_email.required' => 'Please enter email address, it is required',
            'j_phone.required' => 'Please enter phone number, it is required',
            'j_pref_cont_meth.required'=> 'Please select preferred contact method , it is required',
            'j_cover_letter.required' => 'Please enter some information in the tell us about you',
            'j_avail_date.format' => 'Please enter your availability date in the correct format - dd/mm/yyyy',
            'j_avail_date.after' => 'Your availability date must be after today',
            'work_type.required' => 'Please select at least one of part time, fulltime or casual, it is required',
            'work_days.required' => 'Please select at least one of weekdays, Saturdays, Sundays , it is required',
            'j_workinNZ.required' => 'Please select your eligibility to work in NZ, it is required',
            'j_issue_movement.required' => 'Please answer the question regarding movement issues , it is required',
            'j_issue_skin.required'=> 'Please answer the question regarding skin issues , it is required',
            'j_issue_RSI.required'=> 'Please answer the question regarding injuries/medical conditions , it is required',
            'j_declaration.required' => 'Please tick the declaration , it is required',
        ];
        
        $job = $this->validate($request, $rules, $customMessages);
        if($fileName !== null) {
            $job['j_cvpath']  = $fileName;
            $request->cvUpload->storeAs('jobAppl',$fileName);   
        }
        //set up the fields that validator cannot set for us
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

        Job::create($job);
        return redirect('jobs')->with('success','We have received your application and will contact you ...');
    }

}
