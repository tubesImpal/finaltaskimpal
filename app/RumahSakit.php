<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $table = "rumahsakit";
    protected $primaryKey = 'id_rs';
 
    public function dr()
    {
    	return $this->belongsToMany('App\Dokter');
    }
}
