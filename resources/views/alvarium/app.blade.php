<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

{{--<title>Все тут и всё здесь!{{-- config('app.name', 'Все тут и всё здесь!') --}}{{--</title>--}}
@yield('title')
@yield('description')
@yield('facebook')

<!-- Fonts -->
   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Bootsdtrap 4 -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<div class="container" >
   @yield('breadcrumb')
   @yield('content')
   @yield('pagination')
</div>

@section('footer')
   <footer id="colophon" class="site-footer" role="contentinfo">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-12 prava text-center">
               <p>© 2020 Все права защищены.</p>
            </div>
         </div>
      </div>
   </footer>

   <!-- Scripts -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <script src="{{ asset('js/app.js') }}"></script>

@show

</body>
</html>
