<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = "dokter";
    protected $primaryKey = 'id_dokter';
 
    public function rs()
    {
    	return $this->belongsToMany('App\RumahSakit');
    }
}

