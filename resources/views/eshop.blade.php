<x-layout>
  <div class="flex flex-col gap-5">
    <div class="grid grid-cols-3 gap-4">
      @foreach ($shopItems as $item)
        <div class="flex flex-col gap-4">
          <div class="flex flex-col items-center ">
            <h2>{{ $item->product_name }}</h2>
            <p>{{ $item->price }} kr.</p>
            <p>{{ $item->quantity }} på lager</p>
          </div>
          <a class="btn-style" href="{{ route('product', ['id' => $item->id]) }}">View Product</a>
        </div>
      @endforeach
    </div>

    {{-- When on eatchside = 2 ... 1 2 [3] 4 5 ... --}}
    {{ $shopItems->onEachSide(2)->links('cpag.custom') }}
  </div>
</x-layout>
