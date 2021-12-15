<?php

namespace App\Http\Controllers;

use App\Models\View3d;
use Illuminate\Http\Request;

class View3dController extends Controller
{
    public function getData()
    {
        $data = View3d::all();

        return view('3d', compact('data'));
    }
}
