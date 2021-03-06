<?php

namespace App;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model
{
    protected $fillable = [
        "name","estate_ad","title","city","hoods","street","price","quadrature","estate_types",
    ];

    protected $guarded = [];


}
