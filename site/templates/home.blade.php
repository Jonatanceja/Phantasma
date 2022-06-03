@extends('layouts.default')
@section('content')

@foreach($page->children()->listed() as $part)
@include('blocks.' . $part->intendedTemplate(), ['page' => $part])
@endforeach

@endsection
@section('scripts')
<script src="/js/rellax.min.js"></script>
<script>
  // Center all the things!
  var rellax = new Rellax('.rellax', {
    center: true
  });
</script>
@endsection