<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


              <style>
        html{
             font-family: Arial, Helvetica, sans-serif;
        }
        .card{
             display: inline-block;
             border: solid 1px silver;
             padding: 4px;        /* Menos espacio interno */
             margin: 6px 3px;     /* Menos espacio externo */
             border-radius: 4px;
             width: 180px;       /* Tamaño fijo */
             font-size: 12px;    /* Texto más pequeño */
}  
         
        
        
        
        .card h3{
            color: slategray; 
            margin: 0 0 10px 0
        }
        </style>

</head>
    @include('partials.header')

     {{--contyenuto della pagina --}}
    

    @yield("contenuto")

     @include('partials.footer')

</body>
</html>