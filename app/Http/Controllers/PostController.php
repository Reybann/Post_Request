<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        //lógica de validación(no se coloca aquí)
        dd($request->all());
    }
}
