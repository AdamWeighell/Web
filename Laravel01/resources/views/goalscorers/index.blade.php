@extends('layout')

@section('title','goals')


@section('content')

     <h1>Top goal scorers</h1>
     
     <ul>
      @foreach($goalscorer as $goalscorers)
      <li> 
      
      <a href="/goalscorers/{{ $goalscorers->id}}">
      {{ $goalscorers->title}}
      </a>
      
      </li>
      
     @endforeach
     
</ul>
@endsection