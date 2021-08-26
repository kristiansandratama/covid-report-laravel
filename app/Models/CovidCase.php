<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidCase extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'confirmed',
        'in_care',
        'recovered',
        'dead',
    ];
}
