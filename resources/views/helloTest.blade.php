{{-- 繼承 layouts.app --}}
@extends('layouts.app')

{{-- 定義 title section 的 value --}}
@section('title', '測事頁面')

{{-- 搭配 @parent 指令繼承 layouts 的 page-name section，並繼續顯示內容 --}}
@section('page-name')
    @parent
    <p>Sidebar menu </p>
@endsection

{{-- 定義 content section 的內容 --}}
@section('content')
  <div class="container">
    <!--變數必須用大括號包起來 -->
    <h1>news_id：{{$id}}</h1>
  </div>
  {{-- Blade 的註解，不會被 include 進 HTML 中 --}}
  {{-- 利用 {{ }} 語法代入變數 --}}
  <h2>Hello, I am {{ $name }}</h2>

  {{-- Blade If Statements --}}
  {{-- @if、@elseif、@else、@endif --}}
  @if ('Man' === $gender)
      <h4>Man</h4>
  @else
      <h4>Woman</h4>
  @endif

  {{-- Blade Loops --}}
  <h4>Which one do you like<h4>
  <ul>
      @foreach ($items as $item)
          <li>{{ $item }}</li>
      @endforeach
  </ul>

  <h4>Current Value</h4>
  @for ($i = 0; $i < 10; $i++)
      The current value is {{ $i }}<br>
  @endfor
@endsection