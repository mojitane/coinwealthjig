<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  </head>
  <body>

    <nav id="menu" class="cw-side-menu">
      <header class="cw-side-menu__header has-text-right">
        <p class="title is-uppercase has-text-primary has-text-spaced is-6">Main menu</p>
      </header>
      <div class="cw-side-menu__body">
        <ul class="cw-side-menu__links has-text-right">
          <li><a href="#" class="modal-button js-modal-button" data-target="modal-login">Login</a></li>
          <li><a href="#" class="modal-button js-modal-button" data-target="modal-register">Register</a></li>
          <li><a href="#"></a></li>
          <li><a href="/">Start</a></li>
          <li><a href="/thread">Thread</a></li>
          <li><a href="/crypto">All currencies</a></li>
          <li><a href="/coin">Single coin info</a></li>
          <li><a href="/exchangesvolume">All exchanges by volume</a></li>
          <li><a href="/home-returning">Home returning users</a></li>
          <li><a href="/community-home">Community home</a></li>
        </ul>
      </div>
    </nav>

    <div id="panel">
    @include('_partials.header')
    @include('_partials.modals')

    @yield('body')

    @include('_partials.footer')
    </div>



    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <script defer src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/highstock/6.0.3/highstock.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" href="{{ mix('/css/main.css', '') }}">
    <script src="{{ mix('/js/main.js', '') }}"></script>
  </body>
</html>
