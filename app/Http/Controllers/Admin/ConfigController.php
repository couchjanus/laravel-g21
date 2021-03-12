<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(){
        return view('admin.config.index', ['title'=>"Admin Config Controller"]);
    }
}
