<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $fillable = [
        'plant', 'alamat', 'telepon', 'fax', 'email'
    ];
}
