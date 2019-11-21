@extends('layout')

@section('title','Welcome')

@section('content')

     <h1>Ash Road Massive</h1>
     
     
     @foreach($tasks as $task)
     
        {{ $task }}
    
 
     @endforeach
     

      
     
     

@endsection