<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class DataSiswaController extends Controller
{
    public function index($id)
    {
        
        return view('murid.datasiswa',[
            'murids'=>Murid::find($id)
             
            
        ]);
    }

    // public function 
}
