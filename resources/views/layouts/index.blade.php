<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.header')

    <section class="container my-3">
        {{-- @include('partials.titre') --}}
        @yield('content')
    </section>


    @include('partials.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>