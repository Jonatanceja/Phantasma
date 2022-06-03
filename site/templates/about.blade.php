@extends('layouts.default')
@section('content')

@foreach($page->children()->listed() as $part)
@include('blocks.' . $part->intendedTemplate(), ['page' => $part])
@endforeach

<div id="instafeed"></div>

@endsection
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
<script>
    $('.slider').slick({
        dots: true,
        arrows: false,
        autoplay: true,
    });
  </script>
  <script src="/js/rellax.min.js"></script>
  <script>
    // Center all the things!
    var rellax = new Rellax('.rellax', {
      center: true
    });
  </script>
    
@endsection
