<?php

namespace App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Factory as ValidationFactory;

class AppointmentRequest extends FormRequest
{

    public function __construct(ValidationFactory $validationFactory)
    {

        $validationFactory->extend(
            'toValidateTime',
            function ($attribute, $value, $parameters) {

                $formatedDate = date("H:i", strtotime($value));
                $currentDate = Carbon::now()->addMinutes(30)->setTimezone("Pacific/Auckland")->format("H:i");

                if($formatedDate < $currentDate)
                {
                    return false;
                }
                else
                {
                    return true;
                }
            },
            // Custom message
            'Time must be at least 30 minutes in advance'
        );
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $after_date = Carbon::now()->addDays(-1)->setTimezone("Pacific/Auckland")->toDateString();

        return [
            "ap_bar_id" => "required|min:1",
            "ap_cli_id" => "required|min:1",
            "ap_st_id" => "required|min:1",
            //"ap_datetime" => "required|date|after:" . date("Y-m-d")
            "appointmentDay" => "required|after:" . $after_date,

            //"ap_datetime" => "required|date_format:H:i A|after:" . $after_hour
            "ap_datetime" => "toValidateTime"
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