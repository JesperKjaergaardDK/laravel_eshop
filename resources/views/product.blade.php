<x-layout>
  <h1>Product</h1>
  <p>{{ $product->product_name }}</p>
  <p>{{ $product->description }}</p>
  <p>{{ $product->price }}</p>
  <p>{{ $product->quantity }}</p>

  <form action="" method="post">
    <button type="submit">Add to cart</button>
  </form>

</x-layout>
