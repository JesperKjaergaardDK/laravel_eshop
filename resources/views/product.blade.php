<x-layout>
  
    



  <h1>Product</h1>
  <p>{{ $product->product_name }}</p>
  <p>{{ $product->description }}</p>
  <p>{{ $product->price }}</p>
  <p>{{ $product->quantity }}</p>

  <form action="{{ route('cart.store', ['product' => $product->id]) }}" method="post">
    @csrf
    <button type="submit">Add to cart</button>
  </form>


  @if ($errors->all())
    <ul>
      @foreach ($errors->all() as $error)
        <li>* {{$error}}</li>
      @endforeach
    </ul>
  @endif

</x-layout>
