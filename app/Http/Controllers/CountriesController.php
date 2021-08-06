<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountriesRequest;
use Illuminate\Http\Request;


use App\Models\Country;

class CountriesController extends Controller
{
    public function index(){
        $countries = Country::get();

        $setting = [
            "1" => ["bg" => "success", "mark" => "+"],
            "0" => ["bg" => "danger", "mark" => "-"],
        ];


        return view("pages.countries.index", compact(["countries", "setting"]));
    }

    public function create(){
        return view("pages.countries.create");
    }

    public function store(CountriesRequest $request){
        

//        $rules = [
//          "name" => "required",
//          "capital" => "required",
//          "population" => "required|numeric|min:10000",
//        ];

//        $this->validate($request, $rules);


        $name = $request->name;
        $capital = $request->capital;
        $population = $request->population;
        $is_nato = $request->is_nato;

        $country = new Country();
        $country->name = $name;
        $country->capital = $capital;
        $country->population = $population;
        $country->is_nato = $is_nato;

        $country->save();

        return redirect("/countries");
    }

    public function edit($id){
//        $country = Country::where("id", "=", $id)->get()[0];
//        $country = Country::where("id", $id)->get()[0];
//        $country = Country::where("id", $id)->first();
        $country = Country::find($id);

        return view("pages.countries.edit", compact(["country"]));
    }

    public function update(Request $request, $id){
        $country = Country::find($id);

        $name = $request->name;
        $capital = $request->capital;
        $population = $request->population;
        $is_nato = $request->is_nato;

//        $country = new Country();
        $country->name = $name;
        $country->capital = $capital;
        $country->population = $population;
        $country->is_nato = $is_nato;

        $country->save();

        return redirect("/countries");
    }

    public function delete($id){
        Country::destroy($id);

        return redirect("/countries");
    }
}
