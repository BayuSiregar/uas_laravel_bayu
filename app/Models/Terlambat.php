<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terlambat extends Model
{
    use HasFactory;
    protected $table = "tbl_terlambat";
    protected $primaryKey = 'id_terlambat';
    protected $guarded = [];
}
