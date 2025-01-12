<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\FuelType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $publishedCars = Car::where('published_at', '!=', null)->get();

        $car = Car::get()->first();
        dump($car->images);

        return view('home.index', compact('publishedCars'));
    }
}
