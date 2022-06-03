@extends('layouts.default')
@section('content')

<div class="container mx-auto min-h-screen mt-40 md:mt-64">
    
    <div class="grid grid-cols-4 gap-6">

        <?php 
        $items = $page->proyecto()->toStructure();
        foreach ($items as $index => $item): ?>  

        <div>     
        <a data-fancybox-trigger="gallery-{{ $index }}">
            <?php foreach ($item->portada()->toFiles() as $image): ?> 
            <img class="w-full cursor-pointer multiply" src="{{ $image->url() }}" />
            <?php endforeach ?>
        </a>
        <div class="text-center text-xl uppercase tracking-widest py-5">{{ $item->nombre() }}</div>
        <div class="text-center text-sm tracking-widest">{{ $item->texto() }}</div>

         
          <?php foreach ($item->imagen()->toFiles() as $image): ?>
          <a href="{{ $image->crop(980, 620, 99)->url() }}" data-fancybox="gallery-{{ $index }}" data-caption="<p style='text-transform: uppercase; font-size: 1.25rem; letter-spacing: 0.1em;'>{{ $image->alt() }}</p><p style='letter-spacing: 0.1em;'>{{ $image->caption() }}</p>"></a>
          <?php endforeach ?>
        
        </div>

        <?php endforeach ?>
    
    </div>

</div>
@endsection
@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />    
<link rel="stylesheet" type="text/css" href="/css/lightbox.css">
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    $("[data-fancybox]").fancybox({

      thumbs          : false,

      hash            : false,

      loop            : false,

      keyboard        : true,

      toolbar         : true,

      buttons: [
      //"zoom",
      //"share",
      //"slideShow",
      //"fullScreen",
      //"download",
      //"thumbs",
      "close"
      ],
      
      

      animationEffect : "zoom",

      arrows          : true,

      infobar         : false,

      animationDuration: 500,

      zoomOpacity: false,

      transitionEffect: "fade",

      transitionDuration: 1000,

      protect: true,

      idleTime: false,

      })
      

});
</script>
@endsection