<?php

namespace App\Http\Controllers;

use App\Model\phone\Phone;
use Illuminate\Http\Request;
use App\Model\User;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function getPhones(){
        $phones = Phone::all();
        return response()->json($phones);
    }
}
