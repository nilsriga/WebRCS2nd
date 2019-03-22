<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    {{-- jQuerry ui --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    {{-- {{csrf_field()}} --}}
    <title>@yield('title')</title>
</head>

<body>

    <p>Hello from master.blade.php Chief</p>

    @yield('content')

    <p>End of yield content in master.blade.php</p>

</body>

{{-- jQuery --}}
<script src="js/public/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
{{-- jQuerry Plugins --}}
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

{{-- Vue --}}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

{{-- Bootstrap --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- Materialize --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


{{-- Private js's  --}}

<script src="js/private/clicker.js"></script>
{{-- <script src="js/private/calculator.js"></script> --}}
{{-- <script src="js/public/d3.js"></script> --}}
{{-- <script src="js/private/d4.js"></script> --}}
{{-- <script src="js/private/ajaxJsTutorial.js"></script> --}}
{{-- <script src="js/private/ajaxDatabaseTutorial.js"></script> --}}

</html>
