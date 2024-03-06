<div>
    @if (isset($options['type']) && $options['type'] === 'template1')
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

    @elseif (isset($options['type']) && $options['type'] === 'template2')
    <div class="blogGrid" style="padding: 30px;">
        <div href="{{ $banners[0]->images[0]->link }}" class="biggrid">
            <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners[0]->images[0]->image) }}" alt="">
            </div>
        </div>
        <a href="{{ $banners[0]->images[1]->link }}" class="smallgrid1 blogbiggrid">
            <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners[0]->images[1]->image) }}" alt="">
        </a>
        <div class="smallgrid">
            <div class="row md:tw-h-full gx-3 gy-2">
                <a href="{{ $banners[0]->images[0]->link }}" class="col-md-6 tw-h-full">
                    <div class="smallgrid2 blogbiggrid">
                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners[0]->images[0]->image) }}" alt="">
                    </div>
                </a>
                <a href="{{ $banners[0]->images[1]->link }}" class="col-md-6 tw-h-full">
                    <div class="smallgrid3 blogbiggrid">
                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners[0]->images[1]->image) }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>


    @endif
</div>
