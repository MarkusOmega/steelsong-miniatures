<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.frontend.head')
    </head>
    <body class="font-sans antialiased">
        @include('layouts.frontend.header')
            
        <div class="main-container">
            <div class="inner">
                <!-- header Content -->
                @isset($header)
                    <div class="row row-header">
                       <h1> {{ $header }} </h1>
                    </div>
                @endisset

                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif

                <!-- Page Content -->
                <div class="row">
                    {{ $slot }}
                </div>
            </div>
        </div>

        @include('layouts.frontend.footer')
    </body>
</html>