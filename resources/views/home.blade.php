{{-- Thêm layout vào --}}
@extends('layout')

{{-- Những phần trong section'title' sẽ thuộc @yield('title') bên trong layout.blade.php --}}
@section('title')
<title>Home Page</title>
@endsection

{{-- Những phần trong section'title' sẽ thuộc @yield('content') bên trong layout.blade.php --}}
@section('content')
@include('sidebar')
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. . .</p>
@endsection


{{-- Components --}}


<x-layout>
    <x-slot name="title">
      <title>Home Page 1</title>
    </x-slot>

    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eu elit
      semper ex varius vehicula.
    </p>
</x-layout>
