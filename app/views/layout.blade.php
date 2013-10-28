<!DOCTYPE HTML>
<html lang="en"
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Games Collection</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
</head>
<body>
  <div class="containter">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <a href="{{ action('GamesController@index') }}" class="navbar-brand"></a>
      </div>
    </nav>
    @yield('content')
  </div>
</body>
</html>
