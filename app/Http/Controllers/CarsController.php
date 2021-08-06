<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsRequest;
use Illuminate\Http\Request;

use App\Models\Car;

class CarsController extends Controller
{
    public function index(){
        $cars = Car::get();


        return view("pages.cars.index", compact(["cars"]));
    }

    public function create(){
        return view("pages.cars.create");
    }

    public function store(CarsRequest $request){


        $name = $request->name;
        $model = $request->model;
        $power = $request->power;
        $km = $request->km;
        $price = $request->price;
        $year = $request->year;


        $car = new Car();
        $car->name = $name;
        $car->model = $model;
        $car->power = $power;
        $car->km = $km;
        $car->price = $price;
        $car->year = $year;

        $car->save();

        return redirect("/cars");
    }

    public function edit($id){

        $car = Car::find($id);

        return view("pages.cars.edit", compact(["car"]));
    }

    public function update(CarsRequest $request, $id){
        $car = Car::find($id);

        $name = $request->name;
        $model = $request->model;
        $power = $request->power;
        $km = $request->km;
        $price = $request->price;
        $year = $request->year;


        $car->name = $name;
        $car->model = $model;
        $car->power = $power;
        $car->km = $km;
        $car->price = $price;
        $car->year = $year;

        $car->save();

        return redirect("/cars");
    }

    public function delete($id){
        Car::destroy($id);

        return redirect("/cars");
    }
}
