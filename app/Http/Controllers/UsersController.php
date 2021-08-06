<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = [
            ["name" => "Arno", "surname" => "Petrosyan", "year" => 2005],
            ["name" => "awawd", "surname" => "awdawdawd", "year" => 2000],
        ];

        return view("pages.users.index", compact("users"));
    }
}
