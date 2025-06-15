<x-layout>

  @if (count($shopItems))
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

      {{ $shopItems->appends(request()->query())->onEachSide(2)->links('cpag.custom') }}
    @else
      <x-error :search="$search" :min_price="$min_price" :max_price="$max_price" />
  @endif


  </div>
</x-layout>
