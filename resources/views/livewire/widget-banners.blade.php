<div>
    @if (isset($options['type']) && $options['type'] === 'template1')
        <div class="banners my-5">
            <div class="row">

                    @foreach($banners->images as $image)
                        <div class="col-6">
                            <a href="{{ $image->link }}" title="{{ $image->title }}">
                                <img src="{{ asset($image->image) }}" alt="{{ $image->alt }}" class="img-fluid border-radius-3xl img-opacity">
                            </a>
                        </div>
                    @endforeach

            </div>
        </div>

    @elseif (isset($options['type']) && $options['type'] === 'template2')
        <div class="blogGrid" style="padding: 30px;">

            @if($banners->images->isNotEmpty())
                <a href="{{ $banners->images[0]->link }}" class="biggrid">
                    <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                        <img class="tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners->images[0]->image) }}" alt="">
                    </div>
                </a>
                @if(isset($banners->images[1]))
                    <a href="{{ $banners->images[1]->link }}" class="smallgrid1 blogbiggrid">
                        <img class="tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners->images[1]->image) }}" alt="">
                    </a>
                @endif
                <div class="smallgrid">
                    <div class="row md:tw-h-full gx-3 gy-2">
                        @if(isset($banners->images[2]))
                            <a href="{{ $banners->images[2]->link }}" class="col-md-6 tw-h-full">
                                <div class="smallgrid2 blogbiggrid">
                                    <img class="tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners->images[2]->image) }}" alt="">
                                </div>
                            </a>
                        @endif
                        @if(isset($banners->images[3]))
                            <a href="{{ $banners->images[3]->link }}" class="col-md-6 tw-h-full">
                                <div class="smallgrid3 blogbiggrid">
                                    <img class="tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($banners->images[3]->image) }}" alt="">
                                </div>
                            </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>


    @endif
</div>
