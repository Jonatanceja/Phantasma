<div class="container mx-auto py-20 wow fadeIn">
    <?php if($image = $page->imagen()->toFile()): ?>
        <img class="w-full {{ $page->parallax() }}" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
    <?php endif ?> 
</div>