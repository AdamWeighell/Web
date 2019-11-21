@extends('layout')


@section('content')

     <h1 class="title">{{$goalscorer->title}}</h1>
     
     <div class="content">{{$goalscorer->description}}</div>
    
    <p> 
       <a href="/goalscorers/{{ $goalscorer->id}}/edit">Edit</a>
    </p>
    
    <h1>Scored Against</h1>
    @if ($goalscorer->fixture->count())
    <div>
     @foreach ($goalscorer->fixture as $fixtures)
     <div>
     
     <form method="POST" action="/fixture/{{ $fixtures->id}}">
     
    {{ method_field('PATCH') }}
    
    {{csrf_field() }}
     <Label class ="checkbox " for="completed">
     
        <input type ="checkbox" name="completed" onChange="this.form.submit()" {{ $fixtures->completed ? 'checked': ''}}>
     
     {{$fixtures->fixture}}
     
     </label>
     </form>
    
     </div>
     @endforeach
    </div>
    @endif
  
  <form method="POST" action="/goalscorer/{{ $goalscorer->id}}/fixture">
  {{csrf_field() }}
      
      <div class="field">
    
          <label class="label" for='fixture'>New Fixture</label>
    
    
    <div class="control">
         
         <input type="text" class="input" name="fixture" placeholder="New fixture">
         
         </div>
         
         </div>
          
          <div class="field">
             
             <div class="control">
             
                <button type="submit" class="button is-link">Add Task</button>
                
                </div>
                
                </div>
         
         </form>
    
    
     
     

@endsection