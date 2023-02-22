<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('frontend.homepage', compact('cars'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function detail(Car $car)
    {
        return view('frontend.detail', compact('car'));
    }
}
