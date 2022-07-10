<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "tbl_siswa";
    protected $primaryKey = 'id_siswa';
    protected $guarded = [];
}
