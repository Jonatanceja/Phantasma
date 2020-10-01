<div class="container mx-auto py-40">
    <div class="grid grid-cols-3 gap-6">
        <div class="col-span-2">
            <?php if($image = $page->imagen1()->toFile()): ?>
            <img class="{{ $page->parallax1() }}" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
            <?php endif ?> 
        </div>
        <div class="col-span-1">
            <?php if($image = $page->imagen2()->toFile()): ?>
            <img class="{{ $page->parallax2() }}" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
            <?php endif ?> 
        </div>
    </div>
</div>