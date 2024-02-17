<div class="offcanvas offcanvas-start tw-z-[99999999999999999999999999999999]" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" aria-modal="true" role="dialog" style="visibility: visible;">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">منوی {{ config('app.name') }}</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body tw-space-y-4 tw-flex tw-flex-col tw-text-sm">

        @foreach($menus->childMenus as $menu)
            @if ($menu->link)
                <a href="{{ $menu->link }}">
                    {!! $menu->icon !!}
                    {{ $menu->title }}
                </a>
            @endif

        @endforeach
        <div class="accordion menu-accordion menu_sub_category accordion-flush" id="menu_sub_category_parent">
            @foreach($menus->childMenus as $menu)
                @if (!$menu->link)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#menu_sub_category{{ $loop->index >1 ? $loop->index : ''}}" aria-expanded="false" aria-controls="menu_sub_category">
                                    {!! $menu->icon !!}
                                    {{ $menu->title }}
                                </button>
                            </h2>
                            <div id="menu_sub_category{{ $loop->index >1 ? $loop->index : ''}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#menu_sub_category_parent" style="">
                                <div class="accordion-body">
                                    @foreach($menu->childMenus as $item)
                                        <div>
                                            <a href="{{ $item->link }}" class="menu-submenu">
                                                {!! $item->icon !!}
                                                <span>{{ $item->title }}</span>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                @endif
            @endforeach
        </div>
        <!-- Add other menu items outside the loop -->
    </div>
</div>
