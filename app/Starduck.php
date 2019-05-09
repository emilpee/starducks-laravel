<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Starduck extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'employee_id';
    protected $table = 'employees';
    protected $fillable = ['firstName', 'lastName', 'email', 'department', 'salary'];
}