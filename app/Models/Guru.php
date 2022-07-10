<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = "tbl_piket";
    protected $primaryKey = 'id_piket';
    protected $guarded = [];
}
