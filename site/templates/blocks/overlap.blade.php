<div class="container mx-auto text-center text-lg relative py-40">
    <p class="w-3/4 mx-auto py-5 md:py-20 md:pt-40 tracking-widest text-<?= $page->tipo() ?>">{{ $page->texto() }}</p>
    <p class="w-1/2 md:w-1/3 mx-auto tracking-widest text-2xl md:text-4xl text-<?= $page->tipo2() ?> rellax -mt-64">{{ $page->over() }}</p>
</div>