<div>
    <!-- resources/views/livewire/blog.blade.php -->
    @if (isset($options['type']) && $options['type'] === 'simple')
        <section class="blog tw-mt-20">
            <div class="d-flex justify-content-between align-items-baseline mb-3">
                <h2 class="fw-bold fs-6">{{ $options['title'] }}</h2>
                <a href="/blog" class="text-info fs-8">مطالب بیشتر<i class="fa fa-angle-left ps-1"></i></a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="swiper blogSwiper">
                        <div class="swiper-wrapper">
                            @foreach($posts as $post)
                                <a href="{{ $post->link }}" class="swiper-slide tw-rounded-3xl tw-bg-amber-400 tw-text-white">
                                    <div class="tw-rounded-3xl overflow-hidden">
                                        <figure class="tw-relative">
                                            <img class="tw-rounded-3xl tw-h-60 tw-block tw-w-full tw-object-cover"
                                                src="{{ asset($post->image) }}" alt="{{ $post->title }}" title="{{ $post->title }}"
                                                class="img-fluid tw-max-h-52 tw-object-cover card-img">
                                            <h2 class="tw-text-sm title">{{ $post->title }}</h2>
                                        </figure>
                                        <div
                                            class="tw-text-white tw-text-xs tw-flex tw-items-center tw-justify-between tw-px-4 tw-py-4">
                                            <span>{{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}</span>
                                            <div>
                                                <span class="fw-bold">دسته بندی: </span>
                                                <span>{{ $post->category->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @elseif (isset($options['type']) && $options['type'] === 'mosaic')

        <div class="tw-text-center mb-5">
            <h4>{{ $options['title'] }}</h4>
        </div>
        <div class="blogGrid">
                    <a href="{{ $posts[0]->link  }}" class="biggrid">
                        <div class="blogbiggrid tw-cursor-pointer tw-rounded-2xl tw-overflow-hidden tw-relative tw-h-full">
                            <img class="tw-z-10 tw-relative tw-block tw-object-cover tw-h-full tw-w-full" src="{{ asset($posts[0]->image) }}" />
                            <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                                <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[0]->category->name }}</div>
                            </div>
                            <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                                <h6 class="tw-leading-relaxed">{{ $posts[0]->title  }}</h6>
                            </div>
                        </div>
                    </a>

                    <a href="{{ $posts[1]->link  }}" class="smallgrid1 blogbiggrid">
                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[1]->category->name }}</div>
                        </div>
                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($posts[1]->image) }}" alt="">
                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                            <h6 class="tw-leading-relaxed">{{ $posts[1]->title  }}</h6>
                        </div>
                    </a>


                    <div class="smallgrid">
                        <div class="row md:tw-h-full gx-3 gy-2">

                                <a href="{{ $posts[2]->link  }}" class="col-md-6 tw-h-full">
                                    <div class="smallgrid2 blogbiggrid">
                                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[2]->category->name }}</div>
                                        </div>
                                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($posts[2]->image) }}" alt="">
                                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                                            <h6 class="tw-leading-relaxed">{{ $posts[2]->title  }}</h6>
                                        </div>
                                    </div>
                                </a>

                                <a href="{{ $posts[3]->link  }}" class="col-md-6 tw-h-full">
                                    <div class="smallgrid3 blogbiggrid">
                                        <div class="tw-flex tw-flex-col tw-items-end tw-pt-3 tw-absolute tw-bottom-0 tw-left-0 tw-z-20 tw-w-full tw-h-full tw-px-7 index-blog-swiper-bg">
                                            <div class="tw-w-max badge badge-primary custom-btn-primary rounded-pill">{{ $posts[3]->category->name }}</div>
                                        </div>
                                        <img class="z- tw-rounded-2xl tw-block tw-relative tw-w-full tw-h-full tw-object-cover" src="{{ asset($posts[3]->image) }}" alt="">
                                        <div class="tw-absolute tw-bottom-0 tw-z-30 tw-right-0 tw-px-5 tw-pb-3 tw-text-white index-blog-swiper-bg">
                                            <h6 class="tw-leading-relaxed">{{ $posts[3]->title  }}</h6>
                                        </div>
                                    </div>
                                </a>

                        </div>
                    </div>







        </div>
    @elseif (isset($options['type']) && $options['type'] === 'list')
        <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
            <p class="fs-7 fw-bold">
            {{ $options['title'] }}
            </p>
        </div>
        @foreach($posts as $post)
        <div class="tw-flex tw-items-start mt-3 tw-border-0 tw-border-b tw-border-gray-200 tw-pb-4 tw-border-solid">
            <img class="tw-block tw-relative tw-rounded-2xl tw-size-16" src="{{ asset($post->image) }}" alt="">
            <div class="tw-pr-3">
                    <a href="{{ $post->slug }}">
                    <p class="tw-text-sm">{{ $post->title }}</p>
                    </a>
                </div>
        </div>
        @endforeach
    @endif

</div>
