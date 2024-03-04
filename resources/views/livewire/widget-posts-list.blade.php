<div>
    <h5>جدیدترین مطالب</h5>
    <div class="row gx-4 gy-4 mt-1 tw-items-stretch">
        @foreach($posts as $post)
        <a href="{{ $post->link }}" class="col-12 col-lg-6">
            <div class="card post-box-blog">
                <img class="img" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                <h5 class="title">{{ $post->title }}</h5>
                <div class="body">
                    <p class="">{{ $post->short_description }}</p>
                    <div class="footer">
                        <div class="tw-flex tw-justify-between tw-items-center tw-text-slate-500 mt-3">
                            <span>
                                <i class="fa-duotone fa-clock"></i>
                                {{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}

                            </span>
                        </div>
                        <button class="mt-4 tw-rounded-lg tw-w-full btn btn-sm custom-btn-primary" href="/post/{{ $post->id }}">
                            ادامه مطلب
                        </button>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="counter-a"></div>
    <div class="counter-a"></div>
    <div class="cs-pagination mt-5 tw-w-max tw-mx-auto">
        {{ $posts->links() }}
    </div>

    <!-- <nav class="cs-pagination mt-5 tw-w-max tw-mx-auto">
        <a href=""><i class="fa-solid fa-chevron-right"></i></a>
        <span>1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#" class="dots">...</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href=""><i class="fa-solid fa-chevron-left"></i></a>
    </nav> -->
</div>
