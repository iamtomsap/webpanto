<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/carousel.css">
  <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="sticky-top">
            <a href="{{ url('/') }}">
                <img src="/images/logo_transparant.png" height="105">
            </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <!-- <li class="nav-item active">
              <a class="nav-link" href="{{ url('/products') }}">Products</a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ url('/products') }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ url('/allterraincranes') }}">All Terrain Cranes</a>
                <a class="dropdown-item" href="{{ url('/crawlercranes') }}">Crawler Cranes</a>
                <a class="dropdown-item" href="{{ url('/roughterraincranes') }}">Rough Terrain Cranes</a>
                <a class="dropdown-item" href="{{ url('/truckcranes') }}">Truck Cranes</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/inquiries') }}">Inquiries</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('container')
    <div class="fixed-bottom" style="text-align:center;">&copy;Copyright by Panto 2020</div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>