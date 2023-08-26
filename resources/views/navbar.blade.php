<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield ('title','Navbar')</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="{{asset('/css/home.css')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
     <a class="navbar-brand" href="#">
    <img src="https://www.vecteezy.com/png/27146651-watercolor-young-green-plant-growing-ai-generative" width="30" height="30" alt="">
  </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="/Customers/employee">View Employees</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Company
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/Customers/cgvak">Cg-vak</a></li>
              <li><a class="dropdown-item" href="/Customers/filter">filter</a></li>
              <li><a class="dropdown-item" href="/Customers/ass">Associative Array</a></li>
              <li><a class="dropdown-item" href="/Customers/comp">Compact Function</a></li>
              <li><a class="dropdown-item" href="/Customers/scope">SCOPE</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    @yield('content')
</body>

</html>