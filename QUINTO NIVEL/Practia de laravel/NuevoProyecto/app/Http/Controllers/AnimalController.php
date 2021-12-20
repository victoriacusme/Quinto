<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class AnimalController extends Controller
{
    public function show(){
     $animal = Animal::all();
        return view('animales',compact('animal')); 
      
    }
}
