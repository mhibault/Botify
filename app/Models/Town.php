<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{

    protected $table = 'towns';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'region_code', 'region_name', 'dept_code', 'distr_code', 'code', 'name', 'population', 'average_age'
    ];
}