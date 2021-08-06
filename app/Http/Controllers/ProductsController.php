<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = [
            ["name" => "Apple", "count" => 20],
            ["name" => "Ananas", "count" => 40],
            ["name" => "Banana", "count" => 30],
        ];

        return view("pages.products.index", compact("products"));

    }
}
