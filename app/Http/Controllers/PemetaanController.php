<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemetaanController extends Controller
{
    public function dataIndex()
    {
        return view('pemetaan.data-pemetaan');
    }
}
