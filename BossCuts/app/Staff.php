<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = "staffs";
    
    protected $fillable = array(
        "s_fname",
        "s_sname",
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
}
