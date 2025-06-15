@props(['search', 'min_price', 'max_price'])

<div class="text-center mt-10">
  <p class="text-[2rem] font-bold">No result could be found from «<span class=" text-green-500">{{ $search }}</span>».</p>
  <p class="text-[2rem] font-bold">Or has the price between «<span class=" text-green-500">{{ $min_price }} kr</span>» - «<span class=" text-green-500">{{ $max_price }} kr</span>»</p>
  <p class="text-[2rem] font-bold">Try again </p>
</div>
