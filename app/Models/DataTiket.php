<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTiket extends Model
{
    use HasFactory;

    protected $table = 'data_tiket';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_tiket',
        'lokasi',
        'harga',
        'jumlah_tiket',
    ];
}