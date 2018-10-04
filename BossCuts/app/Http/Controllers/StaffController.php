<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barber;
use App\Style;
use DB;

class StaffController extends Controller
{
    public function indexForAdmin(){
        $barbers=DB::table('barbers')->get();
        return view('admin.staff', compact('barbers'));
    }
    
    public function insertStaff(Request $request){
        $barber = new Barber();
        
        $barber->ba_fname = $request->post('ba_fname');
        $barber->ba_sname = $request->post('ba_sname');
        $barber->ba_mon_am_start = $request->post('mon_am_start');
        $barber->ba_mon_pm_start = $request->post('mon_pm_start');
        $barber->ba_mon_am_finish = $request->post('mon_am_finish');
        $barber->ba_mon_pm_finish = $request->post('mon_pm_finish');
        $barber->ba_tue_am_start = $request->post('tue_am_start');
        $barber->ba_tue_pm_start = $request->post('tue_pm_start');
        $barber->ba_tue_am_finish = $request->post('tue_am_finish');
        $barber->ba_tue_pm_finish = $request->post('tue_pm_finish');
        $barber->ba_wed_am_start = $request->post('wed_am_start');
        $barber->ba_wed_pm_start = $request->post('wed_pm_start');
        $barber->ba_wed_am_finish = $request->post('wed_am_finish');
        $barber->ba_wed_pm_finish = $request->post('wed_pm_finish');
        $barber->ba_thu_am_start = $request->post('thu_am_start');
        $barber->ba_thu_pm_start = $request->post('thu_pm_start');
        $barber->ba_thu_am_finish = $request->post('thu_am_finish');
        $barber->ba_thu_pm_finish = $request->post('thu_pm_finish');
        $barber->ba_fri_am_start = $request->post('fri_am_start');
        $barber->ba_fri_pm_start = $request->post('fri_pm_start');
        $barber->ba_fri_am_finish = $request->post('fri_am_finish');
        $barber->ba_fri_pm_finish = $request->post('fri_pm_finish');
        $barber->ba_sat_am_start = $request->post('sat_am_start');
        $barber->ba_sat_pm_start = $request->post('sat_pm_start');
        $barber->ba_sat_am_finish = $request->post('sat_am_finish');
        $barber->ba_sat_pm_finish = $request->post('sat_pm_finish');
        $barber->ba_sun_am_start = $request->post('sun_am_start');
        $barber->ba_sun_pm_start = $request->post('sun_pm_start');
        $barber->ba_sun_am_finish = $request->post('sun_am_finish');
        $barber->ba_sun_pm_finish = $request->post('sun_pm_finish');
        
        $barber->save();
        
        return redirect()->route('admin.staff')->with('success', 'The new staff has been registered');
    }
    
    public function updateStaff(Request $request, $id){
        $barber = Barber::find($id);
        
        $barber->ba_fname = $request->post('ba_fname');
        $barber->ba_sname = $request->post('ba_sname');
        $barber->ba_mon_am_start = $request->post('mon_am_start');
        $barber->ba_mon_pm_start = $request->post('mon_pm_start');
        $barber->ba_mon_am_finish = $request->post('mon_am_finish');
        $barber->ba_mon_pm_finish = $request->post('mon_pm_finish');
        $barber->ba_tue_am_start = $request->post('tue_am_start');
        $barber->ba_tue_pm_start = $request->post('tue_pm_start');
        $barber->ba_tue_am_finish = $request->post('tue_am_finish');
        $barber->ba_tue_pm_finish = $request->post('tue_pm_finish');
        $barber->ba_wed_am_start = $request->post('wed_am_start');
        $barber->ba_wed_pm_start = $request->post('wed_pm_start');
        $barber->ba_wed_am_finish = $request->post('wed_am_finish');
        $barber->ba_wed_pm_finish = $request->post('wed_pm_finish');
        $barber->ba_thu_am_start = $request->post('thu_am_start');
        $barber->ba_thu_pm_start = $request->post('thu_pm_start');
        $barber->ba_thu_am_finish = $request->post('thu_am_finish');
        $barber->ba_thu_pm_finish = $request->post('thu_pm_finish');
        $barber->ba_fri_am_start = $request->post('fri_am_start');
        $barber->ba_fri_pm_start = $request->post('fri_pm_start');
        $barber->ba_fri_am_finish = $request->post('fri_am_finish');
        $barber->ba_fri_pm_finish = $request->post('fri_pm_finish');
        $barber->ba_sat_am_start = $request->post('sat_am_start');
        $barber->ba_sat_pm_start = $request->post('sat_pm_start');
        $barber->ba_sat_am_finish = $request->post('sat_am_finish');
        $barber->ba_sat_pm_finish = $request->post('sat_pm_finish');
        $barber->ba_sun_am_start = $request->post('sun_am_start');
        $barber->ba_sun_pm_start = $request->post('sun_pm_start');
        $barber->ba_sun_am_finish = $request->post('sun_am_finish');
        $barber->ba_sun_pm_finish = $request->post('sun_pm_finish');
        
        $barber->save();
        
        return redirect()->route('admin.staff')->with('success', 'The staff has been updated');
    }
    
    public function deleteStaff($id){
        $barber = Barber::find($id);
        
        $barber->delete();
        
        return redirect()->route('admin.staff')->with('success', 'The staff has been deleted');
    }
}
