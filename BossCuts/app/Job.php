<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Storage;

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
        'j_cvpath',
        'j_avail_date',
        'j_fulltime',
        'j_parttime',
        'j_casual',
        'j_weekdays',
        'j_saturdays',
        'j_sundays',
        'j_workinNZ',
        'j_issue_movement',
        'j_issue_skin',
        'j_issue_RSI',
        'j_issue_notes',
        'j_declaration',
        'j_status'
        ];
        public function hasCV() {
            return ($this->j_cvpath !== "");
        }
        public function getCV() {
            if($this->hasCV()) {
                $filename = "/app/jobAppl/" . $this->j_cvpath;
                //return response()->download($filename);
                return response()->download(storage_path($filename));
            } else return "";
        }
        public function scopeFilter($query, $filter) {
            Return $query->where('j_status',$filter);
        }
}
