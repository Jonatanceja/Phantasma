<div class="container mx-auto wow fadeIn">
    <div class="text-center w-4/5 md:w-3/4 mx-auto my-20 tracking-wider"><p><?= $page->texto()->kti() ?></p></div>
    <div class="relative margen">
    <div class="small uppercase tracking-widest rellax">
        <a class="text-black hover:underline transition duration-300" hover:shadow-md transition duration-150 ease-in-out" href="/work/"><h1>Work</a><br>
        <a class="text-black hover:underline transition duration-300" href="/about/">About</a><br>
        <a class="text-black hover:underline transition duration-300" href="mailto:lou@phantasmads.com" target="blank">Conta<br>ct</a></h1>
    </div>
    
    <?php if($image = $page->imagen1()->toFile()): ?>
        <img class="w-full abajo" src="{{ $image->url() }}" alt="{{ $image->alt() }}">
    <?php endif ?> 
    </div>
    
    
    
</div>