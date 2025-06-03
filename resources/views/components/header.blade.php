<header>
<a href="/">home</a>

<form action="{{ route('search')}}" method="post">
  @csrf
  <label for="">price in between</label>
  <input type="number" placeholder="Min price">
  <input type="number" placeholder="Max price">

  <label for="search">Search after item</label>
  <input autocomplete="off" name="search" type="text">

  <button type="submit">Filter</button>
</form>

<a href="{{route('login')}}"><button type="button">Login</button></a>

</header>