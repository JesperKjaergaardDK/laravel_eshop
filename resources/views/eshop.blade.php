<a href="{{route('login')}}"><button type="button">Login</button></a>

<x-layout>
  <div>
    @foreach ($shopItems as $item)
      <p>{{ $item->name }}</p>
      <p>{{ $item->description }}</p>
      <p>{{ $item->price }}</p>
      <p>{{ $item->quantity }}</p>
    @endforeach
  </div>
</x-layout>
