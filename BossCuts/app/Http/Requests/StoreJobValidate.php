<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobValidate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'j_fname' => 'required|min:3|max:30',
            'j_sname' => 'required|min:3|max:30',
            'j_prefname'=> 'min:2',
           'j_email' => 'required|email',
            'j_phone' => 'required|min:7|max:20',
            'j_pref_cont_meth'=> 'required|in:txt,phone,email',
            'j_cover_letter' => 'min:2',
//try later with multi date format    'j_avail_date' => 'date_multi_format:"d/m/Y","d-m-Y":after:Carbon::now()->subDay()',
            'j_avail_date' => 'date:"d/m/Y"|after:Carbon::now()->subDay()',
            'work_type' => 'required',
            'work_days' => 'required',
            'j_workinNZ' => 'required|in:citPR,visa,noVisa',
            'j_issue_movement' => 'required|in:1,0',
            'j_issue_skin'=> 'required',
            'j_issue_RSI'=> 'required',
            'j_issue_notes' => 'min:2',
            'j_declaration' => 'required'
        ];
    }
}
