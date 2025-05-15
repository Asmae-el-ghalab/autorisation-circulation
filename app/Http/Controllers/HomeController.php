<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Service;


class HomeController extends Controller
{
    public function index(){
       
        return view('admin.dashboard');
    }
}
