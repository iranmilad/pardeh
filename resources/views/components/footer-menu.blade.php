<div>
    <h3 class="fw-bold fs-6 title-dot text-white">{{ $menus->title }}</h3>
    <ul class="tw-pr-5 tw-text-xs">
        @foreach ($menus->childMenus  as $menu)
            <li class="my-3"><a href="{{ $menu->link  }}">{{ $menu->title  }}</a></li>
        @endforeach
    </ul>
</div>
