@if ($paginator->hasPages())
    <nav class="pagination align-center">
        @if ($paginator->onFirstPage())
            <a class="prev page-numbers" href="javascript:void(0)"><i class="fa fa-angle-left"></i></a>
        @else
            <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
        @endif

        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="page-numbers current">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-numbers current">{{ $page }}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
        @else
            <a class="next page-numbers" href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
        @endif
    </nav>
@endif
