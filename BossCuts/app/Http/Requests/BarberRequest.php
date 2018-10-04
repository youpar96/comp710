<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // $table->string("name", 30);
            "name" => "required|min:2",
            // $table->string("surname", 30);
            "surname" => "required|min:2",

            // // Mon
            // $table->time('mon_am_start')->nullable();
            // $table->time('mon_am_finish')->nullable();
            // $table->time('mon_pm_start')->nullable();
            // $table->time('mon_pm_finish')->nullable();
            // // Tue
            // $table->time('tue_am_start')->nullable();
            // $table->time('tue_am_finish')->nullable();
            // $table->time('tue_pm_start')->nullable();
            // $table->time('tue_pm_finish')->nullable();
            // // Wed
            // $table->time('wed_am_start')->nullable();
            // $table->time('wed_am_finish')->nullable();
            // $table->time('wed_pm_start')->nullable();
            // $table->time('wed_pm_finish')->nullable();
            // // Thu
            // $table->time('thu_am_start')->nullable();
            // $table->time('thu_am_finish')->nullable();
            // $table->time('thu_pm_start')->nullable();
            // $table->time('thu_pm_finish')->nullable();
            // // Fri
            // $table->time('fri_am_start')->nullable();
            // $table->time('fri_am_finish')->nullable();
            // $table->time('fri_pm_start')->nullable();
            // $table->time('fri_pm_finish')->nullable();
            // // Sat
            // $table->time('sat_am_start')->nullable();
            // $table->time('sat_am_finish')->nullable();
            // $table->time('sat_pm_start')->nullable();
            // $table->time('sat_pm_finish')->nullable();
            // // Sun
            // $table->time('sun_am_start')->nullable();
            // $table->time('sun_am_finish')->nullable();
            // $table->time('sun_pm_start')->nullable();
            // $table->time('sun_pm_finish')->nullable();
        ];
    }

    public function messages()
    {
        return [
            // Barber
            "ap_bar_id.required" => "Barber is required",
            "ap_bar_id.min" => "Barber should be selected",
            // Client
            "ap_cli_id.required" => "Client is required",
            "ap_cli_id.min" => "Client should be selected",
            // Style
            "ap_st_id.required" => "Style is required",
            "ap_st_id.min" => "Style should be selected",
            // Date
            "appointmentDay.required" => "Date is required",
            "appointmentDay.after" => "Date should be equal or greater than today",
            // Time
            "ap_datetime.date_format" => "Must be at least 30 minutes in advance",
            "ap_datetime.after" => "Must be at least 30 minutes in advance"
        ];
    }
}
