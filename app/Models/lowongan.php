<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowongan extends Model
{
    use HasFactory;
    protected $table = "lowongan";
    protected $guarded = [];
    
    public function perusahaan(){
        return $this->belongsTo(Perusahaan::class,'id_perusahaan');
    }
}
