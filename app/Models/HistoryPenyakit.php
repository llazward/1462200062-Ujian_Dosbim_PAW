<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryPenyakit extends Model
{
    protected $table = 'history_penyakits';
    protected $fillable = [
        'id',
        'nama',
        'gender',
        'umur',
        'penyakit', 
        'diagnosis', 
        'catatan', 
        'tanggal'
    ];
}