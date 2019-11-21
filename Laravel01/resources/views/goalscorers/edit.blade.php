@extends('layout')

@section('title','Players')


@section('content')
<form method="POST" action="/goalscorers/{{$goalscorer->id}}">

{{ method_field('PATCH') }}
  {{csrf_field() }}
<div class="field">
    <label class="label" for="Title">Title</label>
    
    <div class="control">
    <input type="text" class="input" name="title" placeholder="Title" value="{{$goalscorer->title}}">
    </div>
    </div>
    
    <div class="field">
       <label class="label" for="description">Description</label>
       <div class="control">
       <textarea name="description" class="textarea">{{$goalscorer->description}}</textarea>
       </div>
       </div>
       <br />
       <div class="field">
       <div class="control">
           <button type="submit" class="button is-link">Update Title</button>
           </div>
           </div>
         </form>
         <form method="POST" action="/goalscorers/{{$goalscorer->id}}">
         {{ method_field('DELETE')}}
         {{csrf_field() }}
       <div class="field">
       <div class="control">
           <button type="submit" class="button is-link">Delete Goalscorer</button>
           </div>
           </div>
           </form>

@endsection