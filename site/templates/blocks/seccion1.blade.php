<div class="container mx-auto mt-20 md:mt-40 relative">
    <div class="big rellax"><h1><?= $page->texto()->kti() ?></h1></div>
    <?php if($image = $page->imagen1()->toFile()): ?>
        <img class="w-full" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
    <?php endif ?> 
    <?php if($image = $page->imagen2()->toFile()): ?>
        <img class="w-full" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
    <?php endif ?> 
</div>