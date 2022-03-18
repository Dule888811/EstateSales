<?php

namespace App\Http\Controllers;

use App\Ad;
use function view;

class
AddController  extends Controller
{
    public function index()
    {
        $add = Ad::all()->random('1');
        return view('/add.index')->with(['add' => $add]);
    }

}
