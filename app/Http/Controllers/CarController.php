<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    private $cars;

    function __construct(){
       $this -> cars = Storage::json('public/cars.json');
       dd($this ->cars);
    }
}
