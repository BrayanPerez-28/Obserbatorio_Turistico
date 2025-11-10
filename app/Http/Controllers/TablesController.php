<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablesController extends Controller
{
    public function jsGrid()
    {
        return view('tables.js-grid');
    }
}