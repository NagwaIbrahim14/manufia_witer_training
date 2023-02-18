<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}"> Users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}"> Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('orders.index') }}"> Orders</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div>
        @yield('content')
      </div>


      <footer>
        <h3>@all copyrights reserved for winter training</h3>
    </footer>
    </body>
</html>
