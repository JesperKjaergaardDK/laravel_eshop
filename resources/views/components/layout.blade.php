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
    <a href="">home</a>
    
    <form action="" method="post">
      @csrf
      <label for="">price in between</label>
      <input type="number" placeholder="Min price">
      <input type="number" placeholder="Max price">
    
      <label for="search">Search after item</label>
      <input autocomplete="off" name="search" type="text">
    
      <button type="submit">Filter</button>
    </form>
    
    <a href=""><button type="button">Login</button></a>
    
    </header>
  <main>
    {{ $slot }}
  </main>
</body>
</html>