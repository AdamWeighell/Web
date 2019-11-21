<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->with([

        'tasks'=> ['Welcome to the offical website of Goals 2019 Championship winners Ash Road Massive, who after conquering the 5`s have took their talent over to the wednesday 6 a-side League.']

       ]);     
    }
    public function score()
    {
        return view('score')->with([
         'scores'=> ['Ash road Massive 6-1 Leeds Crew','Ash Road Massive 1 - 1 Big Boiselona','Ash Road Massive 5 - 0 Daddy and the Boys' ]
         
         
         

       ]);
       
    }
     public function players()
    {
        return view('players')->with([
        'players'=> ['Adam Weighell','Jack Ball','Elliot Clark','Andrew Parker', 'Toby Burkett', 'Ollie Wright', 'Harry Lowson','Kieran Walton','Adam Walsh','Andy Aston'] 
         ]);
    }
    
    
    
}
