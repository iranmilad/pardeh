<div>
    @if (isset($options['type']) && $options['type'] === 'template2')
        <div class="banners my-5">
            <div class="row">
                @foreach($banners as $banner)
                    @foreach($banner->images as $image)
                        <div class="col-6">
                            <a href="{{ $image->link }}" title="{{ $image->title }}">
                                <img src="{{ asset($image->image) }}" alt="{{ $image->alt }}" class="img-fluid border-radius-3xl img-opacity">
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    @endif
</div>
