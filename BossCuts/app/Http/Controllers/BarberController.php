<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BarberRequest;
use App\Http\Requests\QualifRequest;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Barber;
use App\Qualif;
use Carbon\Carbon;

class BarberController extends Controller
{
    // Route::get('/admin/barber', 'BarberController@list');
    // Get
    public function index()
    {
        return view("barber/list")
        ->with("barbers", Barber::orderBy("name")->get());
    }


    private function Teste($barber)
    {
        $dtNow = Carbon::now();
        //0 (for Sunday) through 6 (for Saturday)
        //dd(date("w"));

        //dd(date("Y F d"));

        //1 (for Monday) through 7 (for Sunday)
        $diaSemana = date("N");

        // $dates = [];
        // $others = [];
        // $saturday = [];

        // while($startDateOthers <= $finishDate)
        // {
        //     $others[] = $startDateOthers->format("g:i A");
        //     //$others[] = Carbon::parse($startDateOthers->format("g:i A"))->format('G:i');
        //     $startDateOthers->addMinutes(15);
        // }

        // while($startDateSaturday <= $finishDate)
        // {
        //     $saturday[] = $startDateSaturday->format("g:i A");
        //     $startDateSaturday->addMinutes(15);
        // }

        // $dates = [
        //     $others,
        //     $saturday
        // ];

        // $startDateOthers = Carbon::create(2018, 1, 1, 0)->addHours(9);
        // $startDateSaturday = Carbon::create(2018, 1, 1, 0)->addHours(8)->addMinutes(30);
        // $finishDate = Carbon::create(2018, 1, 1, 0)->addHours(17);


        // $startDateOthers = Carbon::create(2018, 1, 1, 0)->addHours(9);
        // $startDateSaturday = Carbon::create(2018, 1, 1, 0)->addHours(8)->addMinutes(30);
        // $finishDate = Carbon::create(2018, 1, 1, 0)->addHours(17);

        // $dates = [];
        // $others = [];
        // $saturday = [];

        // while($startDateOthers <= $finishDate)
        // {
        //     $others[] = $startDateOthers->format("g:i A");
        //     //$others[] = Carbon::parse($startDateOthers->format("g:i A"))->format('G:i');
        //     $startDateOthers->addMinutes(15);
        // }

        $diaInicial = $dtNow->dayOfWeekIso;
        $comparador = $dtNow->dayOfWeekIso;

        while($diaInicial != $comparador)
        {
            switch ($diaSemana) {
                case 1:
                    $hasMonday = $this->trabalhaNoDia("monday", $barber);        
                    break;
                case 2:
                    $hasTuesday = $this->trabalhaNoDia("tuesday", $barber);
                    break;
                case 3:
                    $hasWednesday = $this->trabalhaNoDia("wednesday", $barber);
                    break;
                case 4:
                    $hasThursday = $this->trabalhaNoDia("thursday", $barber);
                    break;
                case 5:
                    $hasFriday = $this->trabalhaNoDia("friday", $barber);
                    break;
                case 6:
                    $hasSaturday = $this->trabalhaNoDia("saturday", $barber);
                    break;
                case 7:
                    $hasSunday = $this->trabalhaNoDia("sunday", $barber);
                    break;
            }
        }

        $hoje = Carbon::now();
        //dd($hoje);
        $limite = Carbon::now()->addWeeks(6);
        //dd($limite);

        $datasRetorno = [];

        while($hoje <= $limite)
        {
            $datasRetorno[] = $hoje->toFormattedDateString();

            $hoje->addDays(1);
        }

        dd($datasRetorno);
        //dd($hoje);

        

        
        
        dd($dtNow);
    }

    private function trabalhaNoDia($dia, $barber)
    {
        if($dia == "monday")
        {
            if((!empty($barber->mon_am_start) && $barber->mon_am_start != "00:00:00")
                || (!empty($barber->mon_am_finish) && $barber->mon_am_finish != "00:00:00")
                || (!empty($barber->mon_pm_start) && $barber->mon_pm_start != "00:00:00")
                || (!empty($barber->mon_pm_finish) && $barber->mon_pm_finish != "00:00:00"))
                {
                    return true;
                }
        }
        else if($dia == "tuesday")
        {

        }
        else if($dia == "wednesday")
        {
            
        }
        else if($dia == "thursday")
        {
            
        }
        else if($dia == "friday")
        {
            
        }
        else if($dia == "saturday")
        {
            
        }
        else
        {

        }
    }

    // Route::get('/admin/barber/detailStyles/{id}', 'BarberController@detailStyles');
    // Get
    public function detailStyles($id)
    {
        $barber = Barber::find($id);

        if(empty($barber))
        {
            return "This barber doesn't exists";
        }

        //$this->Teste($barber);

        //$queryStyles = "SELECT * FROM "
        //DB::select('select * from users where id = ?', [1]);
        //$queryStylesBarber = "SELECT * FROM styles S left join qualif Q on S.id = Q.idstyle WHERE Q.idbarber = ? ORDER BY S.st_name";

        // $queryStylesBarber = DB::table('styles')
        //             ->leftJoin('qualif', 'styles.id', '=', 'qualif.idstyle')
        //             ->select('styles.id', 'styles.st_name', 'qualif.id')
        //             ->where('qualif.idbarber', '<>', $barber->id)
        //             ->get();

        

        

        //dd($users);

        //$stylesBarber = DB::select($queryStylesBarber, [(int)$barber->id]);

        //$queryStylesFree = "SELECT * FROM styles S left join qualif Q on S.id = Q.idstyle WHERE Q.idbarber <> ? ORDER BY S.st_name";

        //$stylesFree = DB::select($queryStylesFree, [(int)$barber->id]);
        
        // $users = DB::table('users')
        //     ->join('contacts', 'users.id', '=', 'contacts.user_id')
        //     ->join('orders', 'users.id', '=', 'orders.user_id')
        //     ->select('users.*', 'contacts.phone', 'orders.price')
        //     ->orderBy('name', 'desc')
        //     ->get();

        // $qualif = DB::table("styles")
        //     ->join("qualif", "styles.id", "=", "qualif.idstyle")

        // dd($qualif);

        $stylesFree = DB::select('select * from styles where id not in (select idstyle from qualif where idbarber = ?)', [$id]);
        //$stylesBarber = DB::select('select * from styles where id in (select idstyle from qualif where idbarber = ?)', [$id]);
        $stylesBarber = DB::select('select styles.id, styles.st_name, qualif.id as \'idqualif\', qualif.idbarber as \'idbarber\' from styles inner join qualif on styles.id = qualif.idstyle where qualif.idbarber = ?', [$id]);

        return view("barber/detailStyles")
            ->with("barber", $barber)
            ->with("stylesBarber", $stylesBarber)
            ->with("stylesFree", $stylesFree);
    }

    public function joinBarberStyle(QualifRequest $request)
    {
        $params = $request->all();

        $qualif = new Qualif($params);

        $idBarber = $request["idbarber"];
        $stylesFree = DB::select('select * from styles where id not in (select idstyle from qualif where idbarber = ?)', [$idBarber]);
        $stylesBarber = DB::select('select * from styles where id in (select idstyle from qualif where idbarber = ?)', [$idBarber]);

        $qualif->save();
        
        $barber = Barber::find($idBarber);      

        return redirect()
                ->action("BarberController@index")
                ->with('success', "The style has been joined!")
                ->with("barber", $barber);;
    }

    public function removeStyle(QualifRequest $request)
    {
        $id = $request["id"];

        //dd($id);

        //$qualif = Qualif::find($id);
        //$qualif->delete();

        DB::select('delete from qualif where id = ?', [$id]);

        return redirect()
                ->action("BarberController@index")
                ->with('success', 'Style was deleted successfully');
    }

    // Route::get('/admin/barber/new', 'BarberController@new');
    // Get
    public function new()
    {
        $dates = $this->ReturnDatesAvailable();

        return View('barber/new2')
                ->with("dates", $dates);
    }
    
    // Route::post('/admin/barber/save', 'BarberController@save');
    // Post
    public function saveAdd(BarberRequest $request)
    {
        
        //$params = $this->AdjustParamsValuesInsert($request);
        $params = $request->all();

        $barber = new Barber($params);

        $barber->save();

        $returnMessage = "The barber " . $barber->name . " " . $barber->surname . " has been created";

        return redirect()
                ->action("BarberController@index")
                ->with('success', $returnMessage);
    }

    // Route::get('/admin/barber/edit/{id}', 'BarberController@edit');
    // Get
    public function edit($id)
    {
        $barber = Barber::find($id);

        if(empty($barber))
        {
            return "Esse produto não existe";
        }

        $dates = $this->ReturnDatesAvailable();

        return view("barber/edit")
        ->with("barber", $barber)
        ->with("dates", $dates);
    }

    // Route::post('/admin/barber/update', 'BarberController@update');
    // Post
    public function update(BarberRequest $request)
    {
        $id = 0;

        if ($request->exists("id")) {
            $id = $request["id"];
        }

        //$id = Request::input("id");

        $barber = Barber::find($id);

        $barber->id = $barber->id;
        $barber->name = $request["name"];
        $barber->surname = $request["surname"];
        // Mon
        $barber->mon_am_start = $request["mon_am_start"];
        $barber->mon_am_finish = $request["mon_am_finish"];
        $barber->mon_pm_start = $request["mon_pm_start"];
        $barber->mon_pm_finish = $request["mon_pm_finish"];
        // Tue
        $barber->tue_am_start = $request["tue_am_start"];
        $barber->tue_am_finish = $request["tue_am_finish"];
        $barber->tue_pm_start = $request["tue_pm_start"];
        $barber->tue_pm_finish = $request["tue_pm_finish"];
        // Wed
        $barber->wed_am_start = $request["wed_am_start"];
        $barber->wed_am_finish = $request["wed_am_finish"];
        $barber->wed_pm_start = $request["wed_pm_start"];
        $barber->wed_pm_finish = $request["wed_pm_finish"];
        // Thu
        $barber->thu_am_start = $request["thu_am_start"];
        $barber->thu_am_finish = $request["thu_am_finish"];
        $barber->thu_pm_start = $request["thu_pm_start"];
        $barber->thu_pm_finish = $request["thu_pm_finish"];
        // Fri
        $barber->fri_am_start = $request["fri_am_start"];
        $barber->fri_am_finish = $request["fri_am_finish"];
        $barber->fri_pm_start = $request["fri_pm_start"];
        $barber->fri_pm_finish = $request["fri_pm_finish"];
        // Sat
        $barber->sat_am_start = $request["sat_am_start"];
        $barber->sat_am_finish = $request["sat_am_finish"];
        $barber->sat_pm_start = $request["sat_pm_start"];
        $barber->sat_pm_finish = $request["sat_pm_finish"];
        // Sun
        $barber->sun_am_start = $request["sun_am_start"];
        $barber->sun_am_finish = $request["sun_am_finish"];
        $barber->sun_pm_start = $request["sun_pm_start"];
        $barber->sun_pm_finish = $request["sun_pm_finish"];

        $barber->save();

        return redirect()
                ->action("BarberController@index")
                ->with('success','Barber was updated successfully');;
    }

    // Route::get('/admin/barber/delete/{id}', 'BarberController@delete');
    // Get
    public function delete($id)
    {
        $barber = Barber::find($id);

        if(empty($barber))
        {
            return "This barber doesn't exists";
        }

        return view("barber/delete")->with("barber", $barber);
    }

    // Route::post('/admin/barber/confirmDelete', 'BarberController@confirmDelete');   
    // Post
    public function confirmDelete(BarberRequest $request)
    {
        $id = $request["id"];

        $barber = Barber::find($id);
        $barber->delete();

        return redirect()
                ->action("BarberController@index")
                ->with('success', 'Barber was deleted successfully');
    }

    public function ReturnDatesAvailable()
    {
        $startDateOthers = Carbon::create(2018, 1, 1, 0)->addHours(9);
        $startDateSaturday = Carbon::create(2018, 1, 1, 0)->addHours(8)->addMinutes(30);
        $finishDate = Carbon::create(2018, 1, 1, 0)->addHours(17);

        $dates = [];
        $others = [];
        $saturday = [];

        while($startDateOthers <= $finishDate)
        {
            $others[] = $startDateOthers->format("g:i A");
            //$others[] = Carbon::parse($startDateOthers->format("g:i A"))->format('G:i');
            $startDateOthers->addMinutes(15);
        }

        while($startDateSaturday <= $finishDate)
        {
            $saturday[] = $startDateSaturday->format("g:i A");
            $startDateSaturday->addMinutes(15);
        }

        $dates = [
            $others,
            $saturday
        ];

        return $dates;
    }

    private function AdjustParamsValuesInsert($params)
    {
        // Monday
        dd($params["mon_am_start"]);
        if ($params->exists("mon_am_start")
            && $params["mon_am_start"] == "null") {
            $params["mon_am_start"] = "null";
        }
        else
        {
            dd($params["mon_am_start"]);
            $params["mon_am_start"] = Carbon::parse($params["mon_am_start"])->format('G:i');
        }
        
        if ($params->exists("mon_am_finish")
            && $params["mon_am_finish"] == "null") {
            $params["mon_am_finish"] = null;
        }
        
        if ($params->exists("mon_pm_start")
            && $params["mon_pm_start"] == "null") {
            $params["mon_pm_start"] = null;
        }
        
        if ($params->exists("mon_pm_finish")
            && $params["mon_pm_finish"] == "null") {
            $params["mon_pm_finish"] = null;
        }

        // Tuesday
        if ($params->exists("tue_am_start")
            && $params["tue_am_start"] == "null") {
            $params["tue_am_start"] = null;
        }
        
        if ($params->exists("tue_am_finish")
            && $params["tue_am_finish"] == "null") {
            $params["tue_am_finish"] = null;
        }
        
        if ($params->exists("tue_pm_start")
            && $params["tue_pm_start"] == "null") {
            $params["tue_pm_start"] = null;
        }
        
        if ($params->exists("tue_pm_finish")
            && $params["tue_pm_finish"] == "null") {
            $params["tue_pm_finish"] = null;
        }

        // Wednesday
        if ($params->exists("wed_am_start")
            && $params["wed_am_start"] == "null") {
            $params["wed_am_start"] = null;
        }
        
        if ($params->exists("wed_am_finish")
            && $params["wed_am_finish"] == "null") {
            $params["wed_am_finish"] = null;
        }
        
        if ($params->exists("wed_pm_start")
            && $params["wed_pm_start"] == "null") {
            $params["wed_pm_start"] = null;
        }
        
        if ($params->exists("wed_pm_finish")
            && $params["wed_pm_finish"] == "null") {
            $params["wed_pm_finish"] = null;
        }

        // Thursday
        if ($params->exists("thu_am_start")
            && $params["thu_am_start"] == "null") {
            $params["thu_am_start"] = null;
        }
        
        if ($params->exists("thu_am_finish")
            && $params["thu_am_finish"] == "null") {
            $params["thu_am_finish"] = null;
        }
        
        if ($params->exists("thu_pm_start")
            && $params["thu_pm_start"] == "null") {
            $params["thu_pm_start"] = null;
        }
        
        if ($params->exists("thu_pm_finish")
            && $params["thu_pm_finish"] == "null") {
            $params["thu_pm_finish"] = null;
        }

        // Friday
        if ($params->exists("fri_am_start")
            && $params["fri_am_start"] == "null") {
            $params["fri_am_start"] = null;
        }
        
        if ($params->exists("fri_am_finish")
            && $params["fri_am_finish"] == "null") {
            $params["fri_am_finish"] = null;
        }
        
        if ($params->exists("fri_pm_start")
            && $params["fri_pm_start"] == "null") {
            $params["fri_pm_start"] = null;
        }
        
        if ($params->exists("fri_pm_finish")
            && $params["fri_pm_finish"] == "null") {
            $params["fri_pm_finish"] = null;
        }

        // Saturday
        if ($params->exists("sat_am_start")
            && $params["sat_am_start"] == "null") {
            $params["sat_am_start"] = null;
        }
        
        if ($params->exists("sat_am_finish")
            && $params["sat_am_finish"] == "null") {
            $params["sat_am_finish"] = null;
        }
        
        if ($params->exists("sat_pm_start")
            && $params["sat_pm_start"] == "null") {
            $params["sat_pm_start"] = null;
        }
        
        if ($params->exists("sat_pm_finish")
            && $params["sat_pm_finish"] == "null") {
            $params["sat_pm_finish"] = null;
        }

        // Sunday
        if ($params->exists("sun_am_start")
            && $params["sun_am_start"] == "null") {
            $params["sun_am_start"] = null;
        }
        
        if ($params->exists("sun_am_finish")
            && $params["sun_am_finish"] == "null") {
            $params["sun_am_finish"] = null;
        }
        
        if ($params->exists("sun_pm_start")
            && $params["sun_pm_start"] == "null") {
            $params["sun_pm_start"] = null;
        }
        
        if ($params->exists("sun_pm_finish")
            && $params["sun_pm_finish"] == "null") {
            $params["sun_pm_finish"] = null;
        }

        return $params->all();
    }

    private function AdjustParamsValuesUpdate($barber, $request)
    {
        $barber->id = $request["id"];
        $barber->name = $request["name"];
        $barber->surname = $request["surname"];

        // Monday
        if ($request->exists("mon_am_start")
            && $request["mon_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("mon_am_finish")
            && $request["mon_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("mon_pm_start")
            && $request["mon_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("mon_pm_finish")
            && $request["mon_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        // Tuesday
        if ($request->exists("tue_am_start")
            && $request["tue_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("tue_am_finish")
            && $request["tue_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("tue_pm_start")
            && $request["tue_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("tue_pm_finish")
            && $request["tue_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        // Wednesday
        if ($request->exists("wed_am_start")
            && $request["wed_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("wed_am_finish")
            && $request["wed_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("wed_pm_start")
            && $request["wed_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("wed_pm_finish")
            && $request["wed_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        // Thursday
        if ($request->exists("thu_am_start")
            && $request["thu_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("thu_am_finish")
            && $request["thu_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("thu_pm_start")
            && $request["thu_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("thu_pm_finish")
            && $request["thu_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        // Friday
        if ($request->exists("fri_am_start")
            && $request["fri_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("fri_am_finish")
            && $request["fri_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("fri_pm_start")
            && $request["fri_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("fri_pm_finish")
            && $request["fri_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        // Saturday
        if ($request->exists("sat_am_start")
            && $request["sat_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("sat_am_finish")
            && $request["sat_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("sat_pm_start")
            && $request["sat_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("sat_pm_finish")
            && $request["sat_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        // Sunday
        if ($request->exists("sun_am_start")
            && $request["sun_am_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("sun_am_finish")
            && $request["sun_am_finish"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("sun_pm_start")
            && $request["sun_pm_start"] == "null") {
                $barber->mon_am_start = null;
        }
        
        if ($request->exists("sun_pm_finish")
            && $request["sun_pm_finish"] == "null") {
                $barber->mon_am_start = null;
        }

        return $barber;
    }

    private function FormIsValid($params)
    {
        $objValidation = [];

        // Monday
        $monAM_Start = $params["mon_am_start"];
        $monAM_Finish = $params["mon_am_finish"];
        $monPM_Start = $params["mon_pm_start"];
        $monPM_Finish = $params["mon_pm_finish"];


        $obj = $this->ValidateDates($monAM_Start, $monAM_Finish, $monPM_Start, $monPM_Finish, "monday");

        if(!$obj["isValid"])
        {
            return $obj;
        }

        // Tuesday
        // tue_am_start
        // tue_am_finish
        // tue_pm_start
        // tue_pm_finish
        $tueAM_Start = $params["mon_am_start"];
        $tueAM_Finish = $params["mon_am_finish"];
        $tuePM_Start = $params["mon_pm_start"];
        $tuePM_Finish = $params["mon_pm_finish"];

        // // Wednesday
        // wed_am_start
        // wed_am_finish
        // wed_pm_start
        // wed_pm_finish
        $wedAM_Start = $params["mon_am_start"];
        $wedAM_Finish = $params["mon_am_finish"];
        $wedPM_Start = $params["mon_pm_start"];
        $wedPM_Finish = $params["mon_pm_finish"];

        // // Thursday
        // thu_am_start
        // thu_am_finish
        // thu_pm_start
        // thu_pm_finish
        $thuAM_Start = $params["mon_am_start"];
        $thuAM_Finish = $params["mon_am_finish"];
        $thuPM_Start = $params["mon_pm_start"];
        $thuPM_Finish = $params["mon_pm_finish"];

        // // Friday
        // fri_am_start
        // fri_am_finish
        // fri_pm_start
        // fri_pm_finish
        $friAM_Start = $params["mon_am_start"];
        $friAM_Finish = $params["mon_am_finish"];
        $friPM_Start = $params["mon_pm_start"];
        $friPM_Finish = $params["mon_pm_finish"];

        // // Saturday
        // sat_am_start
        // sat_am_finish
        // sat_pm_start
        // sat_pm_finish
        $satAM_Start = $params["mon_am_start"];
        $satAM_Finish = $params["mon_am_finish"];
        $satPM_Start = $params["mon_pm_start"];
        $satPM_Finish = $params["mon_pm_finish"];

        // // Sunday
        // sun_am_start
        // sun_am_finish
        // sun_pm_start
        // sun_pm_finish
        $sunAM_Start = $params["mon_am_start"];
        $sunAM_Finish = $params["mon_am_finish"];
        $sunPM_Start = $params["mon_pm_start"];
        $sunPM_Finish = $params["mon_pm_finish"];

        $obj = (object) [
            'message' => "",
            'isValid' => true
        ];

        return $obj;;
    }

    private function ValidateDates($date_AM_Start, $date_AM_Finish, $date_PM_Start, $date_PM_Finish, $day)
    {
        $message = "";
        $isValid = true;

        if($date_AM_Start != "null"
            || $date_AM_Start != "00:00:00")
        {
            
        }

        $obj = (object) [
            'message' => $message,
            'isValid' => $isValid
        ];

        return $obj;
    }
}