<?php

namespace App\Http\Controllers;

use App\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function show()
    {
        $computers = Computer::all();
        return view('computers.show',compact('computers'));
    }
}
