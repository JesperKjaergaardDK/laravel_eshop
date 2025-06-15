{{--
Examble of what is in the elements given by the pagination 
[
    [1 => '...?page=1'],               // array of page links
    '...',                             // string: separator
    [9 => '...?page=9', 10 => ..., 11 => ...],  // more page links
    '...',                             // another separator
    [20 => '...?page=20'],            // last page
]
 --}}

{{-- Sees if you have more then one pages worth of data --}}
@if ($paginator->hasPages())

  <nav class="flex justify-center space-x-2 mt-4">
   
    {{-- Checks to see if you are on the first page to stop you going futher back --}}
    @if ($paginator->onFirstPage())
      <span class="px-3 py-1 bg-gray-200 rounded">←</span>
    @else
      <a class="px-3 py-1 bg-white border rounded hover:bg-gray-100" href="{{ $paginator->previousPageUrl() }}">←</a>
    @endif


    @foreach ($elements as $element)
      {{-- Checks if its a string like '...' --}}
      @if (is_string($element))
        <span class="px-3 py-1">{{ $element }}</span>
      @endif

      {{-- Or if its an array lile [1 => 'url'] '...' --}}
      @if (is_array($element))


        {{-- Takes the url in the array --}}    
        @foreach ($element as $page => $url)
  
      
        {{-- Highlights the current page number you are on --}}
          @if ($page == $paginator->currentPage())
            <span class="px-3 py-1 bg-blue-500 text-white rounded">{{ $page }}</span>
          @else
            <a class="px-3 py-1 bg-white border rounded hover:bg-gray-100"
              href="{{ $url }}">{{ $page }}</a>
          @endif  
          @endforeach
      @endif
    @endforeach


    {{-- Checks to see if you are on the last page to stop you going futher page with no content --}}
    @if ($paginator->hasMorePages())
      <a class="px-3 py-1 bg-white border rounded hover:bg-gray-100" href="{{ $paginator->nextPageUrl() }}">→</a>
    @else
      <span class="px-3 py-1 bg-gray-200 rounded">→</span>
    @endif
  </nav>

@endif
