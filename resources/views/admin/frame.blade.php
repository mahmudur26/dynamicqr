<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$title}}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Aleo' rel='stylesheet'>
<link href="{{ asset('frontend/css/adminStyle.css') }}" rel="stylesheet">
</head>
<body>
<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{url('/pending-users')}}">Pending Users</a>
        <a class="py-2 d-none d-md-inline-block" href="{{url('/active-users')}}">Active Users</a>
        <a class="py-2 d-none d-md-inline-block" href="#">QR Status</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Site Status</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Profile</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('logout')}}">Logout</a>
    </nav>
</header>

<div class="container-fluid">
    <div class="container">
        @yield('content')
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>