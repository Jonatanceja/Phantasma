<div class="container mx-auto py-40 wow fadeIn">
    <div class="grid grid-cols-2 gap-6">
        <div>
            <?php if($image = $page->imagen1()->toFile()): ?>
            <img class="{{ $page->parallax1() }}" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
            <?php endif ?> 
        </div>
        <div>
            <?php if($image = $page->imagen2()->toFile()): ?>
            <img class="{{ $page->parallax2() }}" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
            <?php endif ?> 
        </div>
    </div>
</div>