<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
    public function get(Request $request){
        return view(
            'index',
            [
                "info" => "Информация 1",
                "clients" => Info::get()
            ]
        );
    }
}