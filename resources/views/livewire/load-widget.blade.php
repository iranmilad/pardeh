<div>
<!-- resources/views/livewire/load-widget.blade.php -->
    @if ($component=='WidgetProducts')
        <div class="container">
            <livewire:WidgetProducts :type="$block->type" :options="$block->settings" />
        </div>
    @elseif ($component=='WidgetPosts')
        <div class="container">
            <livewire:WidgetPosts :type="$block->type" :options="$block->settings" />
        </div>
    @elseif ($component=='WidgetBanners')
        <div class="container">
            <livewire:WidgetBanners :type="$block->type" :options="$block->settings" />
        </div>
    @elseif ($component=='WidgetSliders')
        <div class="container">
            <livewire:WidgetSliders :type="$block->type" :options="$block->settings" />
        </div>
    @elseif ($component=='WidgetMenus')
        <div class="container">
            <livewire:WidgetMenus :type="$block->type" :options="$block->settings" />
        </div>
    @elseif ($component=='WidgetPostsList')
        <livewire:WidgetPostsList :type="$block->type" :options="$block->settings" />

    @elseif ($component=='WidgetPostsSearch')
        <livewire:WidgetPostsSearch :type="$block->type" :options="$block->settings" />

    @elseif ($component=='WidgetPostTitle')
        <livewire:WidgetPostTitle :slug="$slug" :type="$block->type" :options="$block->settings" />

    @elseif ($component=='WidgetPostInfo')
        <livewire:WidgetPostInfo :slug="$slug" :type="$block->type" :options="$block->settings" />

    @elseif ($component=='WidgetPostFeaturedImage')
        <livewire:WidgetPostFeaturedImage :slug="$slug" :type="$block->type" :options="$block->settings" />
    @elseif ($component=='WidgetPostContent')
        <livewire:WidgetPostContent :slug="$slug" :type="$block->type" :options="$block->settings" />
    @elseif ($component=='WidgetPostTags')
        <livewire:WidgetPostTags :slug="$slug" :type="$block->type" :options="$block->settings" />
    @elseif ($component=='WidgetPostComments')
        <livewire:WidgetPostComments :slug="$slug" :type="$block->type" :options="$block->settings" />
    @endif
</div>
