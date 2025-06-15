<x-layout>
  <div class="mb-10">
    <h1>Shopping cart</h1>
    <a class=" font-bold underline" href="{{route('homepage')}}">Go back</a>
  </div>

  <div class="flex flex-col gap-5">
    <div class="grid grid-cols-3 gap-4">
      @foreach ($shopping_cart as $product)
        <div class="flex flex-col gap-4">
          <div class="flex flex-col items-center ">
            <p>{{ $product['product']->product_name }}</p>
            <p>{{ $product['product']->description }}</p>
            <p>{{ $product['product']->price }}</p>
            <p>Quantity: {{ $product['quantity'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
</x-layout>