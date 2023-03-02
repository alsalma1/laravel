<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $table="inscriptions";

    protected $fillable=['runner_id','race_id','id_insurances','qr','PayPal_email','finish_time'];
}
