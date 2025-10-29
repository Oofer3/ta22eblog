@if ($paginator->hasPages())
<div class="flex justify-center my-6">
    <nav role="navigation" aria-label="Pagination Navigation" class="btn-group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">«</button>
        @else
            <a class="btn" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">«</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($paginator->elements() as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button class="btn btn-disabled" aria-disabled="true">{{ $element }}</button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="btn btn-active" aria-current="page">{{ $page }}</a>
                    @else
                        <a class="btn" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">»</a>
        @else
            <button class="btn btn-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">»</button>
        @endif
    </nav>
</div>
@endif
