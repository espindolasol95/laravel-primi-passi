<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titolo')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


  <style>
  .nav ul {
  display: flex;
  gap: 15px;
  list-style: none;
  height: 100%;
  padding-top: 40px;
  
}


.nav li a{
  font-size: 0.85rem;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  text-decoration: none; 
  color: #2c2c2c; 
}
.nav ul li a.active {
  color: #027ef3;
  border-bottom: 2px solid #027ef3;
  padding-bottom: 10px;
  display: inline-block;

}
        
    </style>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    
 @include('partials.footer')




</body>
</html>