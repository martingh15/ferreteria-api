<?php

namespace App\Http\Controllers;

use App\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        \Log::info('asistencia controller');
        return Asistencia::all();
    }
}
