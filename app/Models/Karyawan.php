<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    public $table = "karyawan";

    use HasFactory;

    protected $guarded = ['id'];
    // protected $primaryKey = ['id'];
}
