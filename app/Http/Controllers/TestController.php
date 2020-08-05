<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registration;

class TestController extends Controller
{
    public function index()
    {
        return registration::all();        
    }
}
