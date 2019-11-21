@extends('layout')

@section('title','Scores')

@section('content')

     <h1>Recent Scores</h1>
     <ul>
      @foreach($scores as $score)
     
       <li> {{ $score }} </li>
       
    
 
     @endforeach
   </ul>
   
@endsection