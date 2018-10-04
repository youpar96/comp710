<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = "appointments";

    // used to ignore fields create_at and update_at
    public $timestamps = false;

    protected $fillable = array(

        "idbarber",
        "iduser",
        "idstyle",
        "appointmentstart",
        "appointmentfinish",
        "name",
        "surname",
        "mobile",
        "email",
        "pref_reminder_meth"
    );

    protected $guarded = ['id'];

    // public function barber(){
    //     return $this->belongsTo('app\Barber');
    // }

    // public function style(){
    //     return $this->belongsTo('app\Style');
    // }

    // public function user(){
    //     return $this->belongsTo('app\User');
    // }
}
