<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function main()
    {
        return view('welcome');
    }
    public function test()
    {
        $title = 'Treść zmiennej którą można przesłać do widoku';
        //return view('test', compact('title'));
        return view('test')->with('przyklad', $title);
    }
}
