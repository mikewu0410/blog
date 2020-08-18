<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
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
    </body>
</html>