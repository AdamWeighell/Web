@extends('layout')

@section('title','Players')


@section('content')

     <h1>Team Sheet</h1>
     <ul>
     
      @foreach($players as $player)
     
       <li>{{ $player }}</li>
 
     @endforeach
     
     </ul>
     

@endsection