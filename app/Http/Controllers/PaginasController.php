<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function boletim()
    {
        return redirect('/boletim');
    }

    public function info()
    {
        return redirect('/info');
    }
}
