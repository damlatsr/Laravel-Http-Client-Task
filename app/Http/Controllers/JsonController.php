<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JsonController extends Controller
{
    public function index()
    {
        $users = json_decode(Http::get('https://jsonplaceholder.typicode.com/users')->body());
        //$users = Http::get('https://jsonplaceholder.typicode.com/users')->json();
        //dd($users);
        return view('users',compact('users'));
    }

    public function photoCard()
    {
        $photos = json_decode(Http::get('https://jsonplaceholder.typicode.com/photos')->body());
        return view('photos',compact('photos'));
    }
    public function todos(){
        $todos = json_decode(Http::get('https://jsonplaceholder.typicode.com/todos')->body());
        //dd($todos);
        return view('todos',compact('todos'));
    }
}
