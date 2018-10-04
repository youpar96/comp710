<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Barber extends Model
{
    protected $table = "barbers";

    public $timestamps = false;

    protected $fillable = array(
        "name",
        "surname",
        "mon_am_start",
        "mon_am_finish",
        "mon_pm_start",
        "mon_pm_finish",
        "tue_am_start",
        "tue_am_finish",
        "tue_pm_start",
        "tue_pm_finish",
        "wed_am_start",
        "wed_am_finish",
        "wed_pm_start",
        "wed_pm_finish",
        "thu_am_start",
        "thu_am_finish",
        "thu_pm_start",
        "thu_pm_finish",
        "fri_am_start",
        "fri_am_finish",
        "fri_pm_start",
        "fri_pm_finish",
        "sat_am_start",
        "sat_am_finish",
        "sat_pm_start",
        "sat_pm_finish",
        "sun_am_start",
        "sun_am_finish",
        "sun_pm_start",
        "sun_pm_finish"
    );

    protected $guarded = ['id'];

    public function styles(){
        return $this->belongsTo('App\Qualif');
    }

    // GETTERS
    // Monday
    public function getMonAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getMonAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getMonPmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getMonPmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    // Tuesday
    public function getTueAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getTueAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getTuePmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getTuePmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    // Wednesday
    public function getWedAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getWedAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getWedPmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getWedPmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    // Thursday
    public function getThuAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getThuAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getThuPmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getThuPmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    // Friday
    public function getFriAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getFriAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getFriPmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getFriPmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    // Saturday
    public function getSatAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getSatAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getSatPmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getSatPmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    // Sunday
    public function getSunAmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getSunAmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getSunPmStartAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function getSunPmFinishAttribute($value)
    {
        return $this->returnTimeFormatted($value);
    }

    public function returnTimeFormatted($value)
    {
        if(empty($value) || $value == "00:00:00")
        {
            return "";
        }

        return Carbon::parse($value)->format('g:i A');
    }

    // SETTERS
    // Monday
    public function setMonAmStartAttribute($value)
    {
        $this->attributes['mon_am_start'] = $value;
    }

    public function setMonAmFinishAttribute($value)
    {
        $this->attributes['mon_am_finish'] = $value;
    }

    public function setMonPmStartAttribute($value)
    {
        $this->attributes['mon_pm_start'] = $value;
    }

    public function setMonPmFinishAttribute($value)
    {
        $this->attributes['mon_pm_finish'] = $value;
    }

    // Tuesday
    public function setTueAmStartAttribute($value)
    {
        $this->attributes['tue_am_start'] = $value;
    }

    public function setTueAmFinishAttribute($value)
    {
        $this->attributes['tue_am_finish'] = $value;
    }

    public function setTuePmStartAttribute($value)
    {
        $this->attributes['tue_pm_start'] = $value;
    }

    public function setTuePmFinishAttribute($value)
    {
        $this->attributes['tue_pm_finish'] = $value;
    }

    // Wednesday
    public function setWedAmStartAttribute($value)
    {
        $this->attributes['wed_am_start'] = $value;
    }

    public function setWedAmFinishAttribute($value)
    {
        $this->attributes['wed_am_finish'] = $value;
    }

    public function setWedPmStartAttribute($value)
    {
        //dd($value);
        $this->attributes['wed_pm_start'] = $value;
    }

    public function setWedPmFinishAttribute($value)
    {
        $this->attributes['wed_pm_finish'] = $value;
    }

    // Thursday
    public function setThuAmStartAttribute($value)
    {
        $this->attributes['thu_am_start'] = $value;
    }

    public function setThuAmFinishAttribute($value)
    {
        $this->attributes['thu_am_finish'] = $value;
    }

    public function setThuPmStartAttribute($value)
    {
        $this->attributes['thu_pm_start'] = $value;
    }

    public function setThuPmFinishAttribute($value)
    {
        $this->attributes['thu_pm_finish'] = $value;
    }

    // Friday
    public function setFriAmStartAttribute($value)
    {
        $this->attributes['fri_am_start'] = $value;
    }

    public function setFriAmFinishAttribute($value)
    {
        $this->attributes['fri_am_finish'] = $value;
    }

    public function setFriPmStartAttribute($value)
    {
        $this->attributes['fri_pm_start'] = $value;
    }

    public function setFriPmFinishAttribute($value)
    {
        $this->attributes['fri_pm_finish'] = $value;
    }

    // Saturday
    public function setSatAmStartAttribute($value)
    {
        $this->attributes['sat_am_start'] = $value;
    }

    public function setSatAmFinishAttribute($value)
    {
        $this->attributes['sat_am_finish'] = $value;
    }

    public function setSatPmStartAttribute($value)
    {
        $this->attributes['sat_pm_start'] = $value;
    }

    public function setSatPmFinishAttribute($value)
    {
        $this->attributes['sat_pm_finish'] = $value;
    }

    // Sunday
    public function setSunAmStartAttribute($value)
    {
        $this->attributes['sun_am_start'] = $value;
    }

    public function setSunAmFinishAttribute($value)
    {
        $this->attributes['sun_am_finish'] = $value;
    }

    public function setSunPmStartAttribute($value)
    {
        $this->attributes['sun_pm_start'] = $value;
    }

    public function setSunPmFinishAttribute($value)
    {
        $this->attributes['sun_pm_finish'] = $value;
    }
}


/*
namespace App;

use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    protected $fillable = [
        'id',
        'ba_fname',
        'ba_sname',
        'ba_mon_am_start',
        'ba_mon_pm_start',
        'ba_mon_am_finish',
        'ba_mon_pm_finish',
        'ba_tue_am_start',
        'ba_tue_pm_start',
        'ba_tue_am_finish',
        'ba_tue_pm_finish',
        'ba_wed_am_start',
        'ba_wed_pm_start',
        'ba_wed_am_finish',
        'ba_wed_pm_finish',
        'ba_thu_am_start',
        'ba_thu_pm_start',
        'ba_thu_am_finish',
        'ba_thu_pm_finish',
        'ba_fri_am_start',
        'ba_fri_pm_start',
        'ba_fri_am_finish',
        'ba_fri_pm_finish',
        'ba_sat_am_start',
        'ba_sat_pm_start',
        'ba_sat_am_finish',
        'ba_sat_pm_finish',
        'ba_sun_am_start',
        'ba_sun_pm_start',
        'ba_sun_am_finish',
        'ba_sun_pm_finish'
    ];

}*/
