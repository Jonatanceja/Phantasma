<div class="container mx-auto py-12">
<div class="slider">
    @foreach($items as $item)
            <?php if($image = $item->imagen()->toFile()): ?>    
            <img class="" src="{{ $image->url() }}" alt="">
            <?php endif ?>
    @endforeach
    </div>
</div>    