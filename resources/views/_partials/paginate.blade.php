{{-- <span class="float-right no-print">
    <ul class="pagination">
       <li class="page-item @if ($data->currentPage() == 1) disabled @endif">
           <a class="page-link" href="{{ $data->url(1) }}">← First Page</a>
       </li>
        {{ $data->appends(request()->query()) }}

         <li class="page-item @if ($data->lastPage() == $data->currentPage()) disabled @endif">
               <a class="page-link" href="?page={{ $data->lastPage() }}">Last Page →</a>
           </li>
   </ul>

</span> --}}


<ul class="pager">
    @if ($paginator->onFirstPage())
        <li class="disabled"><span>← Previous</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active"><span>{{ $page }}</span></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
    @else
        <li class="disabled"><span>Next →</span></li>
    @endif
</ul>
