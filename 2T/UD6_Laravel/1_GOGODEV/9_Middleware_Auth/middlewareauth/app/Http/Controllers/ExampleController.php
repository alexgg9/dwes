<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //

    public function index()
    {
        return response()->json([
            'message' => 'Hello World'
        ]);
    }

    //Añadimos una segunda función de ejemplo para observar la diferencia:
    public function noAccess()
    {
        return response()->json("No access", 404);
    }
}
