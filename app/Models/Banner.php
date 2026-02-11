<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public $fillable = ["banner_image","banner_alt"];

    protected $primaryKey = 'b_id';
}
