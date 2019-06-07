<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Smart ELibrary</title>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/one-page-wonder.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Smart E library</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

        <!-- Authentication Links -->

        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Log In</a>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">Welcome to </h1>
        <h2 class="masthead-subheading mb-0">Smart E library System</h2>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6 order-lg-1">
          <div class="p-5">

          </div>
        </div>

    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <div class="p-5">

          </div>
        </div>

    </div>
  </section>

  <section>
    <div class="container">
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">

          </div>
        </div>
      </div>

  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Smart E library 2019</p>
    </div>
    <!-- /.container -->
  </footer>
    </body>
</html>
