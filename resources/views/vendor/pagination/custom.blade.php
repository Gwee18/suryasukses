@if ($paginator->hasPages())
    <div class="textaboveheader-landing page mt-4 text-left">
        <ul class="pagination" id="yw0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="d-none"><a href="javascript:void(0)">&lt; Previous</a></li>
            @else
                <li class="d-none"><a href="{{ $paginator->previousPageUrl() }}">&lt; Previous</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page disabled"><a href="javascript:void(0)">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page active"><a href="javascript:void(0)">{{ $page }}</a></li>
                        @else
                            <li class="page"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="d-none hidden"><a href="{{ $paginator->nextPageUrl() }}">Next &gt;</a></li>
            @else
                <li class="d-none hidden"><a href="javascript:void(0)">Next &gt;</a></li>
            @endif
        </ul>
    </div>
@endif
