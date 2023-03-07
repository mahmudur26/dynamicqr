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
        <a class="py-2 d-none d-md-inline-block" href="{{url('/site-statistics')}}">Site Status</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('admin_profile')}}">Profile</a>
        <a class="py-2 d-none d-md-inline-block" href="{{route('logout')}}">Logout</a>
    </nav>
</header>

<div class="container-fluid">
    <div class="container">
        @yield('content')
    </div>
</div>



<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">
  
      <!-- Grid row-->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2023 Copyright
      <!-- <a href="/"> MDBootstrap.com</a> -->
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>