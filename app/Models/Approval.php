<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    protected $fillable = [
        'status', // tambahkan kolom lain jika diperlukan
    ];
}
