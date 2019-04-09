<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>เข้าสู่ระบบ</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    
</head>
<body>
    
<div class="row backgroundimg">
    
     <div class="container">
     <div class="stage">
         <hr>
  <h1 class="title1" data-text="CENTER">บริษัท กุลหญิงคอสเมติกส์ จำกัด</h1>
  <hr>
  <h2 class="title1" data-text="CENTER">KULYINGCOSMETICS CO., LTD.</h2>
</div>
 
      

   
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </div>
</div>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('vendor/js/bootstrap.min.js')}}"></script>
</body>
</html>
