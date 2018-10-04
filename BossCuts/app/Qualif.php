<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualif extends Model
{
    protected $table = "qualif";

    public $timestamps = false;

    protected $fillable = array(
        "idbarber",
        "idstyle"
    );

    protected $guarded = ['id'];

    public function styles(){
        return $this->hasMany('App\Style');
    }

    public function barbers(){
        return $this->hasMany('App\Barber');
    }
}
