<?php

namespace App\Http\Controllers;
use App\Car;
use App\Pilot;
use App\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller {

  public function homeFunction() {
    $cars = Car::all();
    return view('pages.home', compact('cars'));
  }

  public function pilotFunction($id) {
    $pilot = Pilot::findOrFail($id);
    return view('pages.pilot', compact('pilot'));
  }

  public function brandFunction($id){
    $brand = Brand::findOrFail($id);
    return view('pages.brand', compact('brand'));
  }

  public function createFunction() {
    $brands = Brand::all();
    return view('pages.create', compact('brands'));
  }

  public function storeFunction(Request $request) {
    $validated = $request -> validate([
      'name' => 'required|string',
      'model' => 'required|string',
      'kW' => 'required|integer',
      'brand_id' => 'required|integer'
    ]);

    $brand = Brand::findOrFail($request -> get('brand_id'));
    $car = Car::make($validated);
    $car->brand()->associate($brand);
    $car->save();
    return redirect()->route('home');
  }

}
