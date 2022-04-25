@if($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if($paginator->currentPage() > 5)
                <li class="page-item">
                    <a class="page-link" style="background-color: #131313; color: #F19CAD ;"  href="<?php echo $paginator->url( $paginator->currentPage() - 5 ); ?>" rel="prev" aria-label="&lsaquo; Skip 5"> &lsaquo; Skip 5 </a>
                </li>
            @endif
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" style="background-color: #131313; color: #F19CAD ;" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item" >
                    <a class="page-link" style="background-color: #131313; color: #F19CAD ;" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" style="background-color: #131313; color: #F19CAD ;" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" style="background-color: #131313; color: #F19CAD ;" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" style="background-color: #131313; color: #F19CAD ;" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" style="background-color: #131313; color: #F19CAD ;" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" style="background-color: #131313; color: #F19CAD ;" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
            @if($paginator->lastPage() >= $paginator->currentPage()+5)
                <li class="page-item">
                    <a class="page-link" style="background-color: #131313; color: #F19CAD ;" href="{{ $paginator->url( $paginator->currentPage() + 5 ) }}" rel="prev" aria-label="Skip 5  &rsaquo;">Skip 5 &rsaquo;</a>
                </li>
            @endif
        </ul>
    </nav>
@endif