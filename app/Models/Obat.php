<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = "obats";
    protected $primarykey = "id";
    protected $fillable = [
        'id' , 'kode_obat' , 'nama_obat' , 'jenis_obat' , 'keluhan' , 'stok' , 'harga'];
}

