<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>

        <div>
        @yield('content')
        </div>            
        </div>


          <script src="js/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
    </body>
</html>