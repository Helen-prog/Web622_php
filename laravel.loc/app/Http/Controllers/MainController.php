<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class MainController extends Controller{
    public function index(){
        // return View::make('main.index', [
        //     'name' => 'Vlad',
        //     'age' => 35,
        //     'title' => 'Main Page!'
        // ]);
        // $users = json_decode(file_get_contents('https://reqres.in/api/users'), true);
        // $users = Http::get('https://reqres.in/api/users')->json();
        // // dump($users);
        // $data = $users['data'];
        $title = 'Main page';
        return view('main.index', compact('title'));  //, 'data'
    }

    public function test(){
        // $name = "Irina";
        // $age = 25;
        // $title = "Test Page";
        // return view('main.test', compact('name', 'age', 'title'));
        return view('main.test', ['title' => 'Test page']);
    }

    public function contact(){
        // $title = "Contact Page";
        // return view("main.contact")->with(['title' => $title]);
        return view('main.contact', ['title' => 'Contact page']);
    }
}