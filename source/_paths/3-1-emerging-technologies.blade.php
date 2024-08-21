@php
    $title = 'التقنيات الناشئة';
    $image = '/images/paths/3-1/main.jpg';
    $sections = [];
@endphp

@extends('_layouts.main')


@section('body')
    @include('_partials.path.header')

    @include('_partials.path.main', ['title' => $title, 'image' => $image])

    @foreach ($sections as $section)
        @include($section['type'], ['data' => $section['data']])
    @endforeach


    @include('_partials.paths.3-1.ai')
    <div class="relative w-full h-12 bg-white"></div>
    @include('_partials.paths.3-1.bd')
    <div class="relative w-full h-12 bg-white"></div>
    @include('_partials.paths.3-1.bc')
    <div class="relative w-full h-12 bg-white"></div>
    @include('_partials.paths.3-1.iot')
    <div class="relative w-full h-12 bg-white"></div>
    @include('_partials.paths.3-1.5g')
    <div class="relative w-full h-12 bg-white"></div>
    @include('_partials.paths.3-1.gt')
@endsection
