<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'j_fname',
        'j_sname',
        'j_prefname',
        'j_email',
        'j_phone',
        'j_pref_cont_meth',
        'j_cover_letter',
        'j_cover_letter_path',
        'j_cvpath',
        'j_avail_date',
        'j_fulltime',
        'j_parttime',
        'j_casual',
        'j_weekdays',
        'j_saturdays',
        'j_sundays',
        'j_workinNZ',
        'j_work_visa_path',
        'j_issues_movement',
        'j_issues_skin',
        'j_issues_RSI',
        'j_issues_notes',
        'j_declaration',
        'j_signature',
        'j_status'
        ];
}
