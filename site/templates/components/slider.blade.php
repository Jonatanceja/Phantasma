<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      {{ $slot }}
    </div>
    <div class="swiper-pagination"></div>
  </div>

@once
@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: 'true',
      },
    });
  </script>
@endpush
@endonce