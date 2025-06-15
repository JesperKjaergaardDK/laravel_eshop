<x-layout>

  <div class="grid grid-cols-12 gap-4">
    <a class=" font-bold underline" href="{{url()->previous()}}">Go back</a>
    <div class="flex flex-row gap-4 col-start-2 col-end-7">
      <div class="flex flex-col items-center gap-5">
        <h1>{{ $product->product_name }}</h1>
        <p>{{ $product->description }}</p>

        <div class="flex flex-colum gap-4">
          <p class="">{{ $product->price }}Kr.</p>
          <p class="">{{ $product->quantity }}Left in storage</p>
        </div>

        <form action="{{ route('cart.store', ['product' => $product->id]) }}" method="post">
          @csrf
          <button class="btn-style" type="submit">Add to cart</button>
        </form>

        @if (Session::get('success'))
          <p class="text-[2rem] font-bold text-green-500"> {{ Session::get('success') }}</p>
        @endif
      </div>

    </div>
    <img class="col-start-8 col-end-12" src="{{ asset('images/curly-long-hairstyle-1.png') }}"
      alt="Placeholder for a product">

  </div>




  @if ($errors->all())
    <ul>
      @foreach ($errors->all() as $error)
        <li>* {{ $error }}</li>
      @endforeach
    </ul>
  @endif

</x-layout>
