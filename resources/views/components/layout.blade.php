<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>E-shop</title>
</head>
<body>
  <header>
    <a href="{{route('homepage')}}">home</a>
    
    <form action="{{route('search')}}" method="get">
      <label for="">price in between</label>
      <input type="number" placeholder="Min price">
      <input type="number" placeholder="Max price">
    
      <label for="search">Search after item</label>
      <input autocomplete="off" name="q" type="text" placeholder="Search products...">
    
      <button type="submit">Filter</button>
    </form>
    
    <a href="{{route('login')}}"><button type="button">Login</button></a>
    
    </header>
  <main>
    {{ $slot }}
  </main>
</body>
</html>