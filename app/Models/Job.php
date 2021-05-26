<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    protected $fillable = ['title','description','local','remote','type','company_id'];

    protected $dates = ['deleted_at'];

    function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
