<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>
    <link rel="icon" type="image/svg" sizes="32x32" href="/images/favicon.svg">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>

    <style>
      .small h1 {
            font-size: 140px;
            position: absolute;
            color: black;
            text-align: center;
            width: 100%;
            top: 0%;
            transform: translateY(-55%);
        }

        @media only screen and (max-width: 768px) {
            .small h1 {font-size: 120px;}
          }
        
          @media only screen and (max-width: 600px) {
            .small h1 {font-size: 60px;}
          }

          .margen {
            margin-top: 500px;
          }

          @media only screen and (max-width: 600px) {
            .margen {margin-top: 250px;}
          }

          .centrado {
            left: 50%;
            transform: translate(-50%)
          }
          
          
          .slider .slick-dots li button::before {
          font-size: 12px;
          margin-top: 25px;
          }

          .slick-next, .slick-prev {
          font-size: 40;
          width: 40px;
          height: 40px;
          }


          .slick-next:before {
          content: url(images/derecha.svg);
          }

          .slick-prev:before {
            content: url(images/izquierda.svg);
          }


    </style>
    
</head>
<body style="background-color: #{{ $page->color() }}">
  <div style="background-color: #{{ $page->color() }}">
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
        <svg width="21px" height="21px" viewBox="0 0 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <!-- Generator: Sketch 59 (86127) - https://sketch.com -->
          <title>Close</title>
          <desc>Close icon.</desc>
          <g id="Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
              <g id="Landing" transform="translate(-1291.000000, -64.000000)" stroke="#000000" stroke-width="2">
                  <g id="Group" transform="translate(1292.500000, 65.500000)">
                      <line x1="0" y1="0" x2="18" y2="18" id="Line"></line>
                      <line x1="18" y1="0" x2="0" y2="18" id="Line"></line>
                  </g>
              </g>
          </g>
      </svg></a>
      <div class="overlay-content">
        <div class="uppercase tracking-wider text-black hover:text-white"><a href="/work"><h1>Work</h1></a></div>
        <div class="uppercase tracking-wider text-black hover:text-white"><a href="/about"><h1>About</h1></a></div>
        <div class="uppercase tracking-wider text-black hover:text-white"><a href="/contact"><h1>Conta<br>ct</h1></a></div>
        <div class="uppercase tracking-wider text-black hover:text-white"><a href="https://www.instagram.com/phantasma_ds/" target="blank"><h1>Insta<br>gram</h1></a></div>
      </div>

      </div>

    <div class="container px-6 md:px-0 fixed top-0 w-full centrado z-10" style="background-color: #{{ $page->color() }}">
        <div class="grid grid-cols-2">
        <div>
        <p class="tracking-widest text-<?= $page->tipo() ?>" style="font-size: 56px"><a href="{{ $site->url() }}">....</a></p>
        </div>
      <div>
      <span class="text-4xl py-12 cursor-pointer float-right" onclick="openNav()">
      <svg width="28px" height="18px" viewBox="0 0 38 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <!-- Generator: Sketch 59 (86127) - https://sketch.com -->
        <title>Menu</title>
        <desc>Menu icon.</desc>
        <g id="Welcome" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
          <g id="Elementos" transform="translate(-42.000000, -38.000000)" stroke="#000000">
            <g id="Burger-B" transform="translate(42.000000, 39.000000)">
              <line x1="0" y1="0.206349206" x2="37.7239022" y2="0.206349206" id="Path-3"></line>
              <line x1="0" y1="12.7936508" x2="37.7239022" y2="12.7936508" id="Path-3-Copy"></line>
              <line x1="0" y1="25.5873016" x2="37.7239022" y2="25.5873016" id="Path-3-Copy-2"></line>
            </g>
          </g>
        </g>
      </svg>
    </span>
    </div>
  </div>
</div>


@yield('content')


  </div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/menu.js"></script>
<script src="/js/rellax.min.js"></script>
<script>
  // Center all the things!
  var rellax = new Rellax('.rellax', {
    center: true
  });
</script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
<script>
  $('.slider').slick({
      dots: true,
      arrows: false,
      autoplay: true,
  });
</script>
<script>
  $('.fade').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});
</script>
</body>
</html>
