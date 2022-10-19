<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function info(){
        return view('admin.index');
    }
}
