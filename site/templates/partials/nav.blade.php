<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn hover:opacity-75" onclick="closeNav()">
      <svg width="21px" height="21px" viewBox="0 0 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <!-- Generator: Sketch 59 (86127) - https://sketch.com -->
        <title>Close</title>
        <desc>Close icon.</desc>
        <g id="Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
            <g id="Landing" transform="translate(-1291.000000, -64.000000)" stroke="#000000" stroke-width="2">
                <g id="Group" transform="translate(1292.500000, 65.500000)">
                    <line x1="0" y1="0" x2="18" y2="18" id="Line"></line>
                    <line x1="18" y1="0" x2="0" y2="18" id="Line"></line>
                </g>
            </g>
        </g>
    </svg></a>
    <div class="overlay-content">
      <div class="uppercase tracking-wider text-black hover:text-white"><a href="/work"><h1>Work</h1></a></div>
      <div class="uppercase tracking-wider text-black hover:text-white"><a href="/about"><h1>About</h1></a></div>
      <div class="uppercase tracking-wider text-black hover:text-white"><a href="mailto:lou@phantasmads.com" target="blank"><h1>Conta<br>ct</h1></a></div>
      <div class="uppercase tracking-wider text-black hover:text-white"><a href="https://www.instagram.com/phantasma_ds/" target="blank"><h1>Insta<br>gram</h1></a></div>
    </div>

    </div>

  <div class="container px-6 md:px-0 fixed top-0 w-full centrado z-10 mx-auto" style="background-color: #{{ $page->color() }}">
      <div class="grid grid-cols-2">
      <div>
      <p class="tracking-widest" style="font-size: 56px"><a class="text-<?= $page->tipo() ?> hover:opacity-75" href="{{ $site->url() }}">....</a></p>
      </div>
    <div>
    <span class="text-4xl py-12 cursor-pointer float-right hover:opacity-75" onclick="openNav()">
    <svg width="28px" height="18px" viewBox="0 0 38 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <!-- Generator: Sketch 59 (86127) - https://sketch.com -->
      <title>Menu</title>
      <desc>Menu icon.</desc>
      <g id="Welcome" stroke="none" stroke-width="2" fill="none" fill-rule="evenodd">
        <g id="Elementos" transform="translate(-42.000000, -38.000000)" stroke="<?= $page->tipo() ?>">
          <g id="Burger-B" transform="translate(42.000000, 39.000000)">
            <line x1="0" y1="0.206349206" x2="37.7239022" y2="0.206349206" id="Path-3"></line>
            <line x1="0" y1="12.7936508" x2="37.7239022" y2="12.7936508" id="Path-3-Copy"></line>
            <line x1="0" y1="25.5873016" x2="37.7239022" y2="25.5873016" id="Path-3-Copy-2"></line>
          </g>
        </g>
      </g>
    </svg>
  </span>
  </div>
</div>
</div>