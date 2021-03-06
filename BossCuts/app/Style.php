<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable=[
        'st_name',
        'st_description',
        'st_duration',
        'st_cost',
        'st_visibility'
        ];
    
    Public function scopeVisible($query) {
        Return $query->where('st_visibility',1);
    }
    
    public function barbers(){
        return $this->belongsTo('App\Qualif');
    }
}
