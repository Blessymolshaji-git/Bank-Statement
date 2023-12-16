<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="background-image:url({{asset('image/1.jpeg')}});background-repeat: no-repeat;background-size: cover;">
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style=" font-weight:bold; background-color:#ffffff; border:1px solid black;opacity:0.8;">
       
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="margin-left:500px ; margin-top:50px;" >
                    
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('form',['id' => Auth::id()]) }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('depositpage') }}">Depost</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('withdrawpage') }}">Withdraw</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Transer</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Statement</a>
                   </li>
                   <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                   </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>