<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudPersegi extends Model
{
    use HasFactory;
Protected $table = 'crudpersegi';
protected $fillable = ['panjang', 'lebar',
'luas', 'keliling'];
    use HasFactory;
}
