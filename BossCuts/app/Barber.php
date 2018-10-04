<?php

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
}
