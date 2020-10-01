@extends('layouts.default')
@section('content')

<div class="container mx-auto min-h-screen mt-40 md:mt-64">
    
    <div class="grid grid-cols-4 gap-6">    
        <?php 
        $items = $page->proyecto()->toStructure();
        foreach ($items as $item): ?>
            <div x-data="{open:false}">
                <?php foreach ($item->portada()->toFiles() as $image): ?>
                <img class="w-full cursor-pointer" src="{{ $image->url() }}" @click="open=true">
                <?php endforeach ?>
                <div class="text-center text-xl uppercase tracking-widest py-5">{{ $item->nombre() }}</div>
                <div class="text-center text-sm tracking-widest">{{ $item->texto() }}</div>
            
            
                <!-- The Modal/Lightbox -->
                <div x-show="open" class="fixed inset-0 z-30 bg-white">
                    <span class="cursor-pointer absolute z-50 top-0 right-0 mt-8 mr-8" @click="open=false"><svg width="22px" height="20px" viewBox="0 0 22 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Projects" transform="translate(-1333.000000, -589.000000)" stroke="#4A4A4A">
                              <g id="Preview" transform="translate(0.000000, 559.000000)">
                                  <g id="X" transform="translate(1334.000000, 30.000000)">
                                      <line x1="0.457958994" y1="0" x2="20.457959" y2="20" id="Path-3"></line>
                                      <line x1="0.457958994" y1="0" x2="20.457959" y2="20" id="Path-3-Copy" transform="translate(10.457959, 10.000000) scale(-1, 1) translate(-10.457959, -10.000000) "></line>
                                  </g>
                              </g>
                          </g>
                      </g>
                     </svg>
                    </span><!-- Close cursor -->
                
                <div class="container mx-auto">
                    <div class="fade py-24 px-12 ">
                        <?php foreach ($item->imagen()->toFiles() as $image): ?>
                        <div>
                        <img class="mx-auto" src="{{ $image->crop(1080, 720, 99)->url() }}">
                        <div class="text-black py-2 px-4 text-center">
                            <p class="text-xl uppercase tracking-widest">{{ $image->alt() }}</p>
                            <p class="text-sm tracking-widest">{{ $image->caption() }}</p>
                        </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
    

                
                </div>    
            
            
            </div>

        <?php endforeach ?>
    </div>
</div>

@endsection