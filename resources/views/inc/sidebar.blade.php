@section('sidebar')
        <div class="well">
            @auth
            <h3>You are logged in as</h3><br>
            <h2>#{{ Auth::user()->firstname }}</h2>
            
            
            @else
            <h3>Please Log in or Register to contact us!</h3>
            @endauth
            
            
            
        </div>