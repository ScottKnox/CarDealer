<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Car Dealership</title>
  <meta name="description" content="Offering used cars at amazing prices!">
  <meta name="author" content="417Digital">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="{{asset('styles/styles.css')}}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div id="container-full-width">
    <div id="header">
        <div id="header-address">
            <img class="header-icon"
            src="{{asset('images/location-icon.png')}}"/>
        <p>1234 Car Dealer Ln.<br/>
        Buffalo, MO 65622</p>
        </div>
      <img id="header-logo" src="{{asset('images/logo.png')}}" alt="logo" />
      <button id="header-phone"><img class="header-icon"
        src="{{asset('images/tel-icon.png')}}"/>417-333-3333</button>
    </div>

    <div id="navbar">
        <ul id="navList">
            <li class="navItem active"><a href="/">Home</a></li>
            <li class="navItem"><a href="/inventory">Inventory</a></li>
            <li class="navItem"><a href="#how-it-works">How It Works</a></li>
            <li class="navItem"><a href="#packages">Packages & Pricing</a></li>
            <li class="navItem"><a href="#contact-us">Contact Us</a></li>
        </ul>
    </div>

    @yield('content')

    <button onclick="topFunction()" id="top-button" title="Go to top">Back to Top</button>

    <div id="footer">
      <p>Copyright Car Dealership Demo © 2023 – All Rights Reserved</p>
    </div>
  </div>
    <script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
