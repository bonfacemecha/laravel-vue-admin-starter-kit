<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    <title>{{ config('app.name') }}</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

{{-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css"> --}}
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
   
   <script>
        // Generate crsf token (used in forms to prevent laravel 419 error)
           (function () {
               window.Laravel = {
                   csrfToken: '{{ csrf_token() }}'
               };
           })();         
        </script>
</head>

<body>
    <div id="app" class="bg-light-default">
        <App/>
    </div>
</body>

  <script src="{{ mix('/js/app.js') }}"></script>
</html>