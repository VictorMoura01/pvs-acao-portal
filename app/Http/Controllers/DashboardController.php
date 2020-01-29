<?php

namespace App\Http\Controllers;

use App\Area;
use App\Colaborador;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

}
