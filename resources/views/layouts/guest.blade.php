<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.frontend.head')
    </head>

    <body>
        {{ $slot }}    
   </body>
</html>