<a href="{{route('login')}}"><button type="button">Login</button></a>

<x-layout>
  <div>
    @foreach ($shopItems as $item)
      <p>{{ $item->product_name }}</p>
      <p>{{ $item->description }}</p>
      <p>{{ $item->price }}</p>
      <p>{{ $item->quantity }}</p>
     
      <a href="{{ route('product', ['id' => $item->id]) }}">View Product</a>
    @endforeach
  </div>

  {{ $shopItems }}
</x-layout>
