<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    //
    function index()
    {

        $list_all_warga = Warga::all();
        return view('warga.index', compact(['list_all_warga']));


    }
}
