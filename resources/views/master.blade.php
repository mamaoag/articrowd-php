<html>
<meta name="_token" content="{{csrf_token()}}">
<head>
    <title>@yield('title')</title>
</head>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="/css/font-awesome.css">
<body>
    <div id="app">
        @include('partials.nav')
        <div class="columns is-mobile">
            @if(Auth::check())
            <div class="column is-narrow">
                @include('partials.menu')
            </div>
            @endif
            <div class="column">
                {{--    Content      --}}
                    @include('partials.alert')
                    @yield('content')
            </div>
        </div>
    </div>
</body>
</html>