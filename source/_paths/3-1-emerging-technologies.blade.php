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

    {{-- @include('_partials.path.right-text')
    @include('_partials.path.left-list')
    @include('_partials.path.right-list')
    @include('_partials.path.left-text') --}}
@endsection
