<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request;
use Auth;
use App\User;
use App\Appointment;
use App\Style;
use App\Barber;

class AppointmentController extends Controller
{
    // public function appointments()
    // {
    //     return view("appointment/appointments")
    //     ->with("styles", Style::orderBy("st_name")->get())
    //     ->with("barbers", Barber::orderBy("name")->get());
    // }

    // public function clientAppointment()
    // {
    //     return view("appointment/client");
    // }

    // public function ajaxRequestPost()
    // {
    //     $idStyle = request()->input('idStyle');

    //     $barbers = DB::table('barbers')
    //                 ->where('id', '=', $idStyle)
    //                 ->get();

    //     return response()->json([
    //         'success' => 'true',
    //         "barbers" => $barbers
    //     ]);
    // }

    // /appointment
    // Route::get('/appointment', 'AppointmentController@appointment');
    public function appointment()
    {
        if(!Auth::guest())
        {
            $user = Auth::user();

            if($user["type"] == "admin")
            {
                //return redirect()
                //        ->action("AppointmentController@appointmentAdmin");
            }
            else
            {
                return redirect()
                        ->action("AppointmentController@appointmentClient", $user->id);
                        //->withInput("id", );
            }
        }

        return view("appointment/appointment");
    }

    // // Guest
    // // /appointment/guest
    // Route::get('/appointment/guest', 'AppointmentController@appointmentGuest');
    public function appointmentGuest()
    {
        return view("appointment/appointmentGuest")
                ->with("styles", Style::orderBy("st_name")->get())
                ->with("barbers", Barber::orderBy("name")->get());
    }

    // // Client
    // // /appointment/client
    // Route::get('/appointment/client{id}', 'AppointmentController@appointmentClient');
    public function appointmentClient($id)
    {
        $user = User::find($id);

        return view("appointment/appointmentClient")
                ->with("user", $user)
                ->with("styles", Style::orderBy("st_name")->get())
                ->with("barbers", Barber::orderBy("name")->get());
    }

    // // Book - appointment Post
    // // /appointment/book
    // Route::post('/appointment/book', 'AppointmentController@appointmentBook

    
    public function findBarberByStyle()
    {
        $idStyle = request()->input('idStyle');

        $barbers = DB::table('barbers')
                    ->where('id', '=', $idStyle)
                    ->get();

        return response()->json([
            'success' => 'true',
            "barbers" => $barbers
        ]);
    }

    public function checkAvailabilityByClient()
    {
        $idStyle = request()->input('idStyle');
        $idBarber = request()->input('idBarber');

        $user = Auth::user();

        // $barbers = DB::table('barbers')
        //             ->where('id', '=', $idStyle)
        //             ->get();

        $userAppointments = Appointment::select("select id, appointmentstart, appointmentfinish from appointments where iduser = ?", [$user->id]);
        $nonUserAppointments = Appointment::select("select id, appointmentstart, appointmentfinish from appointments where iduser <> ?", [$user->id]);
        $barber = Barber::find($idBarber);
        $style = Style::find($idBarber);

        return response()->json([
            'success' => 'true',
            "style" => $style,
            "barber" => $barber,
            "user" => $user,
            "userAppointments" => $userAppointments,
            "nonUserAppointments" => $nonUserAppointments
        ]);
    }
}
