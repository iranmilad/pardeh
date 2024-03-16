{{-- resources/views/partials/breadcrumbs.blade.php --}}

@unless ($breadcrumbs->isEmpty())
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item fs-8"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item fs-8 active"><a href="{{ $breadcrumb->url ?? null }}">{{ $breadcrumb->title }}</a></li>
            @endif

        @endforeach
    </ol>
@endunless
