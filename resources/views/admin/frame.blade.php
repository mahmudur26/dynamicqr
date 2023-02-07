<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
            <span data-feather="home" class="align-text-bottom"></span>
            Admin Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="file" class="align-text-bottom"></span>
            Orders
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Products
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="users" class="align-text-bottom"></span>
            Customers
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Reports
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="layers" class="align-text-bottom"></span>
            Integrations
            </a>
        </li>
        </ul>
    </div>
</nav>
    
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
@yield('content')
</main>

</div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>