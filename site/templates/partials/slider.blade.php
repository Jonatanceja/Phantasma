<div class="container mx-auto py-12 overflow-hidden">
    <x-slider>
        @foreach($items as $item)
            @if($image = $item->imagen()->toFile())
                @if ($file = $item->libro()->toFile())
                        <div class="swiper-slide relative">
                            <img class="w-full" src="{{ $image->url() }}" alt="">
                            <a class="absolute right-10 bottom-10 text-white text-xs tracking-widest uppercase" href="{{ $file->url() }}" download="">
                                Descargar | {{ $item->name() }} 
                            </a>
                        </div>    
                @endif
            @endif
        @endforeach
    </x-slider>
</div>    