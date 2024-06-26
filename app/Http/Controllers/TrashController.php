<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function trash_can() // Método que se llama desde la ruta.
    {
        return view('trashlist'); // Nos devuelve una vista
    }
}
