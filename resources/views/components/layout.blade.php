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
 
      <label for="search">Search after item</label>
      <input autocomplete="off" name="q" type="text" placeholder="Search products..." value="{{request('q')}}">
    
      @if (request()->has('q') && request('q') !== '')
        <label for="">price in between</label>
        <input type="number" name="min_price" placeholder="Min price" value="{{request('min_price')}}"> 
        <input type="number" name="max_price" placeholder="Max price" value="{{request('max_price')}}">  
      @endif

      <button type="submit">Filter</button>
    </form>
    
 
  
    <a href="{{route('login')}}"><button type="button">Login</button></a>
    
    </header>
  <main>
    {{ $slot }}
  </main>
</body>
</html>