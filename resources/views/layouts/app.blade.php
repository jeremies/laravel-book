<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Book</title>
        <link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" type="text/css">
        @yield('css')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.0.11/css/fork-awesome.min.css" integrity="sha256-MGU/JUq/40CFrfxjXb5pZjpoZmxiP2KuICN5ElLFNd8=" crossorigin="anonymous">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><i class="fa fa-fw fa-2x fa-facebook-official fbicon"></i></li>
                @if (Auth::user() !== null)
                    <li class="right">
                        <a href="/logout">Logout</a>
                    </li>
                @else
                    <li class="right">
                        <a href="/register">Sign up</a>
                    </li>
                    <li class="right">
                        <a href="/login">Sign in</a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="content">
            @if (count($errors) > 0)
            <div class="alert">
                <strong>Whoops! Something went wrong!</strong>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
            @yield('content')
        </div>
    </body>
</html>
