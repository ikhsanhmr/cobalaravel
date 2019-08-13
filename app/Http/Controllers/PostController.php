<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        //
       echo 'test';
    }

    public function create(){

        return view('create');
    }


    public function store(Request $request){

        return dd($request->all());
    }


}
