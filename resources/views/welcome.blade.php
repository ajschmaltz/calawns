<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>C.A. Lawns | Lawn Care in Windermere & Orlando</title>

  <!-- Bootstrap -->
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link href="/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
  <div id="nav">
    <nav>
      @include('block.nav')
    </nav>
  </div>

  <div id="header" class="container-fluid">
    <header>
      @include('block.header')
    </header>
  </div>

  <div id="slogan" class="container-fluid text-center">
    <span>Servicing South West Orlando including <a href="/windermere">Windermere</a>, <a href="/dr-phillips">Dr. Phillips</a> and <a href="winter-garden">Winter Garden</a></span>
  </div>

  <div id="content" class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-push-8 col-sm-5 col-sm-push-7">
        @yield('sidebar')
      </div>
      <div class="col-md-8 col-md-pull-4 col-sm-7 col-sm-pull-5">
        @yield('content')
      </div>
    </div>
  </div>

  <div id="footer" class="container-fluid text-center">
    <footer>
      @include('block.footer')
    </footer>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>