<!DOCTYPE html>

<html>

<head>

     <title>@yield('title')</title>
     
     <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

        </div>
    </div>
</head>

<body>     
     
    
     
     <ul>
          <li><a href="/">Home</a></li>
         
        <li><a href="/score">Scores</a></li>
        
        <li><a href="/players">Players</a></li>
        
        <li><a href="/goalscorers">Top Scorers</a></li>
        
        <li><a href="/goalscorers/create">New Goalscorer</a></li>
         
     </ul>
      @yield ('content')
</body>

</html>