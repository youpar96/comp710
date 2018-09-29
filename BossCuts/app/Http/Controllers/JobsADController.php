<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Carbon\Carbon;

class JobsADController extends Controller
{
    /******************** index *************************
     * Display a listing of the Job Applications.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $jobs = Job::latest()->get();
        //DD($jobs);
        return view('jobs.index', compact('jobs'));
    }
    /****************** show ********************************
     * Display the specified Job Application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $job = Job::find($id);
        if($job->j_status=="new") {
            //change status to read and save it
            $job->j_status = "read";
            $job->save();
        }
        return view('jobs.show', compact('job','id'));
    }
    /******************* edit **********************************
     * Show the form for editing the specified Job Application.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function statusChange(Request $request, $id) {
        $job = Job::find($id);
        $job->j_status = $request->input('newStatus');
        $job->save();
        return view('jobs.show', compact('job','id'));
    }
    /*********************
     * Update the specified Job Application in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }
     /*********************
     * Download CV the specified Job Application in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downloadCV($filename) {
        $filepath = "/app/jobAppl/" . $filename;
        return response()->download(storage_path($filepath));
    }
    /**
     * Remove the specified Job Application from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}