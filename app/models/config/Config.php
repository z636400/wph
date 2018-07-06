<?php

namespace App\models\config;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public $table='config';
    public $primaryKey='id';
    public $timestamps = false;
}
