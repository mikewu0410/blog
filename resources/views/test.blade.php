{{-- 繼承 layouts.app --}}
@extends('layouts.app')

{{-- 定義 title section 的 value --}}
@section('title', 'Test Page')

{{-- 搭配 @parent 指令繼承 layouts 的 page-name section，並繼續顯示內容 --}}
@section('page-name')
    @parent
    <p>Index Page</p>
@endsection

{{-- 定義 content section 的內容 --}}
@section('content')
    <p>This is my body content.</p>
@endsection

{{-- 透過 @include 指令引用其他的 section --}}
{{-- resources/views/include/example.blade.php --}}
{{--@include('include.example')--}}

{{-- 利用 @ 跳脫，Blade 並不會處理這段，而是直接完整顯示 {{ name }} 在 HTML 中 --}}
Hello, @{{ name }}.
