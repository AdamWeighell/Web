<!DOCTYPE html>

<html>

<head>

     
</head>

<body>    
<h1>Add New Goalscorer</h1>
 
     <form method="POST" action="/goalscorers">
     
     {{csrf_field() }}
    
    
    <div class="control">
    <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="goalscorer name" value="{{old('title')}}">
    </div>
        </div>
    
    
    <div class="control">
    <textarea name="description" class="textarea {{ $errors->has('title') ? 'is-danger' :''}}" placeholder="goalscorer description" value="{{old('description')}}"></textarea>
    </div>
    </div>
    
    <div>
    
    <button type="submit">Add Goalscorer</button>
    
    </div>
    
    @if ($errors->any())
    
   <div class="notification is-danger">
   
   <ul>
    
    @foreach ($errors->all() as $error)
    
    <li>{{ $error }}</li>
    
    @endforeach
   
   </ul>
   
   
   </div>
    
      @endif
      </form>
    
     
</body>


</html>
