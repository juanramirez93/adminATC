<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NaturalCustomer extends Model
{
    protected $fillable = ['cedula', 'firstName', 'lastName', 'email', 'phone', 'cellphone1', 'cellphone2', 'address', 'city', 'department'];
}