<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    use HasFactory;
    protected $fillable = ['nik', 'nama', 'alamat']; //agar column bisa di isi
    protected $table = 'warga'; //agar bisa memasukkan data ke table warga
}
