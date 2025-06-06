<x-layout>


    @foreach ($results as $result)
      <p>{{ $result->product_name }}</p>
      <p>{{ $result->description }}</p>
      <p>{{ $result->price }}</p>
      <p>{{ $result->quantity }}</p>
    @endforeach
    
    {{  $results->appends(request()->query())->links() }}

</x-layout>