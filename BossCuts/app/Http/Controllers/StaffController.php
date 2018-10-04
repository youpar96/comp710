<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Style;
use DB;

class StaffController extends Controller
{
    public function indexForAdmin(){
        $staffs=DB::table('staffs')->get();
        return view('admin.staff', compact('staffs'));
    }
    
    public function insertStaff(Request $request){
        $staff = new Staff();
        
        $staff->s_fname = $request->post('s_fname');
        $staff->s_sname = $request->post('s_sname');
        $staff->mon_am_start = $request->post('mon_am_start');
        $staff->mon_pm_start = $request->post('mon_pm_start');
        $staff->mon_am_finish = $request->post('mon_am_finish');
        $staff->mon_pm_finish = $request->post('mon_pm_finish');
        $staff->tue_am_start = $request->post('tue_am_start');
        $staff->tue_pm_start = $request->post('tue_pm_start');
        $staff->tue_am_finish = $request->post('tue_am_finish');
        $staff->tue_pm_finish = $request->post('tue_pm_finish');
        $staff->wed_am_start = $request->post('wed_am_start');
        $staff->wed_pm_start = $request->post('wed_pm_start');
        $staff->wed_am_finish = $request->post('wed_am_finish');
        $staff->wed_pm_finish = $request->post('wed_pm_finish');
        $staff->thu_am_start = $request->post('thu_am_start');
        $staff->thu_pm_start = $request->post('thu_pm_start');
        $staff->thu_am_finish = $request->post('thu_am_finish');
        $staff->thu_pm_finish = $request->post('thu_pm_finish');
        $staff->fri_am_start = $request->post('fri_am_start');
        $staff->fri_pm_start = $request->post('fri_pm_start');
        $staff->fri_am_finish = $request->post('fri_am_finish');
        $staff->fri_pm_finish = $request->post('fri_pm_finish');
        $staff->sat_am_start = $request->post('sat_am_start');
        $staff->sat_pm_start = $request->post('sat_pm_start');
        $staff->sat_am_finish = $request->post('sat_am_finish');
        $staff->sat_pm_finish = $request->post('sat_pm_finish');
        $staff->sun_am_start = $request->post('sun_am_start');
        $staff->sun_pm_start = $request->post('sun_pm_start');
        $staff->sun_am_finish = $request->post('sun_am_finish');
        $staff->sun_pm_finish = $request->post('sun_pm_finish');
        
        $staff->save();
        
        return redirect()->route('admin.staff')->with('success', 'The new staff has been registered');
    }
    
    public function updateStaff(Request $request, $id){
        $staff = Staff::find($id);
        
        $staff->s_fname = $request->post('s_fname');
        $staff->s_sname = $request->post('s_sname');
        $staff->mon_am_start = $request->post('mon_am_start');
        $staff->mon_pm_start = $request->post('mon_pm_start');
        $staff->mon_am_finish = $request->post('mon_am_finish');
        $staff->mon_pm_finish = $request->post('mon_pm_finish');
        $staff->tue_am_start = $request->post('tue_am_start');
        $staff->tue_pm_start = $request->post('tue_pm_start');
        $staff->tue_am_finish = $request->post('tue_am_finish');
        $staff->tue_pm_finish = $request->post('tue_pm_finish');
        $staff->wed_am_start = $request->post('wed_am_start');
        $staff->wed_pm_start = $request->post('wed_pm_start');
        $staff->wed_am_finish = $request->post('wed_am_finish');
        $staff->wed_pm_finish = $request->post('wed_pm_finish');
        $staff->thu_am_start = $request->post('thu_am_start');
        $staff->thu_pm_start = $request->post('thu_pm_start');
        $staff->thu_am_finish = $request->post('thu_am_finish');
        $staff->thu_pm_finish = $request->post('thu_pm_finish');
        $staff->fri_am_start = $request->post('fri_am_start');
        $staff->fri_pm_start = $request->post('fri_pm_start');
        $staff->fri_am_finish = $request->post('fri_am_finish');
        $staff->fri_pm_finish = $request->post('fri_pm_finish');
        $staff->sat_am_start = $request->post('sat_am_start');
        $staff->sat_pm_start = $request->post('sat_pm_start');
        $staff->sat_am_finish = $request->post('sat_am_finish');
        $staff->sat_pm_finish = $request->post('sat_pm_finish');
        $staff->sun_am_start = $request->post('sun_am_start');
        $staff->sun_pm_start = $request->post('sun_pm_start');
        $staff->sun_am_finish = $request->post('sun_am_finish');
        $staff->sun_pm_finish = $request->post('sun_pm_finish');
        
        $staff->save();
        
        return redirect()->route('admin.staff')->with('success', 'The staff has been updated');
    }
    
    public function deleteStaff($id){
        $staff = Staff::find($id);
        
        $staff->delete();
        
        return redirect()->route('admin.staff')->with('success', 'The staff has been deleted');
    }
}
