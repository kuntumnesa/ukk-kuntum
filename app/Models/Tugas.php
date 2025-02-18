<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tugas extends Model
{
    use HasFactory;
    protected $table = 'task';

    protected $fillable = [
        'tugas',
        'prioritas',
        'tgl_dibuat',
        'tgl_selesai',
        'status',
    ];
}
