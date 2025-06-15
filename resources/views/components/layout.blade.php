<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>E-shop</title>
</head>

<body class="container m-auto">
  <header class="flex justify-between items-center pt-5 pb-5 mb-8 ">
    <a href="{{ route('homepage') }}">
      <h1>Home icon</h1>
    </a>

    <form class="flex items-center gap-4" action="{{ route('search') }}" method="get">
      <div class="flex flex-col gap-1">

        <label for="search">Search</label>
        <input id="search" autocomplete="off" name="q" type="text" placeholder="Search products..."
          value="{{ request('q') }}">
      </div>

      <div class="flex flex-col gap-1">
        <label for="min_price">Min price</label>
        <input id="min_price" type="number" name="min_price" placeholder="Min price"
          value="{{ request('min_price') }}">
      </div>

      <div class="flex flex-col gap-1">
        <label for="max_price">Max price</label>
        <input id="max_price" type="number" name="max_price" placeholder="Max price"
          value="{{ request('max_price') }}">
      </div>

      <button class="btn-style" type="submit">Filter</button>
    </form>

    <div class="flex gap-5 items-center">
      @php
        $cart = session('cart', []);
        $totalQuantity = array_sum(array_column($cart, 'quantity'));
      @endphp
      <a href="{{ route('cart.index') }}">
        <h2>Cart quantity: {{ $totalQuantity }}</h2>
      </a>

      @if (Auth::user())
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="bg-red-700 text-white font-bold p-1 rounded-sm" type="submit">Logout</button>
        </form>
      @else
        <a class="btn-style" href="{{ route('login') }}">Login</a>
      @endif
    </div>
  </header>

  <main>
    {{ $slot }}
  </main>
</body>

</html>
