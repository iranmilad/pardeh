<div class="">
    <div class="container tw-py-4 tw-bg-[var(--header-bg)] tw-rounded-b-2xl">
        <div class="tw-w-full md:tw-w-[70%] tw-mx-auto tw-flex tw-justify-center lg:tw-hidden">
            @livewire('search')
        </div>
        <nav class="tw-items-center tw-justify-center navbar-link-main tw-hidden lg:tw-flex">
            @foreach($menus->childMenus as $mainItem)
                @if ($mainItem->link)
                <a href="{{ $mainItem->link }}" class="navbar-link-menu">
                    {{ $mainItem->title }}
                </a>
                @else
                <div class="dropdown dropdown-center cs-main-menu">
                    <button class="navbar-link-menu" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $mainItem->title }}
                        <i class="fa-regular fa-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu tw-w-full">
                        <div class="container tw-overflow-x-auto">
                            <div class="primary-menu">
                                @if ($mainItem->link=="" and $mainItem->show_title)
                                    <h6 class="title-dot tw-mb-3">{{ $mainItem->title }}</h6>
                                @endif
                                @foreach($mainItem->childMenus as $item)
                                    <a href="{{ $item->link }}" class="dropdown-item">
                                        {!! $item->icon !!}
                                        <span>{{ $item->title }}</span>
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </nav>
    </div>
</div>
