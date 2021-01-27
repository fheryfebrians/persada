<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersadaProfile extends Model
{
    protected $fillable = [
        'profile', 'visi', 'misi'
    ];
}
