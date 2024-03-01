<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sendmessage extends Model
{
    use HasFactory;
    protected $table='send_messages';

    protected $fillable=[
        'name',
        'email',
        'tel',
        'message',
    ];
}
