<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinEcosystem extends Model
{
    use HasFactory;
    protected $table='join_ecosystems';

    protected $fillable=[
        'name',
        'course',
        'email',
        'tell',
        'date',
        'country',
        'city',
    ];
}
