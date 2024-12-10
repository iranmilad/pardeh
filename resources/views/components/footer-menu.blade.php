<div>
    <h3 class="fw-bold fs-6 title-dot text-white">{{ $menu->title }}</h3>
    <ul class="tw-pr-5 tw-text-xs">
        @foreach ($menu->childMenus  as $item)
            <li class="my-3"><a href="{{ $item->link  }}">{{ $item->title  }}</a></li>
        @endforeach
    </ul>
</div>
