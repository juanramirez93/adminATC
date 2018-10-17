<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteNaturalOld extends Model
{
    protected $table = 'cliente_natural';
    protected $connection = 'atc_old';
}
