<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumnis';
    // protected $fillable= [
    //     'name',
    //     'tanggal_lahir',
    //     'tahun_lulus',
    //     'email',
    //     'No_telepon',
    //     'image',
    // ];
}
