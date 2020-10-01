@extends('layouts.default')
@section('content')

<div class="text-xl md:text-4xl uppercase text-center tracking-widest mt-10 pb-10 text-{{ $page->tipo() }}">{{ $page->title() }}</div>

@foreach($page->children()->listed() as $part)
@include('blocks.' . $part->intendedTemplate(), ['page' => $part])
@endforeach

@endsection