<div>
    <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
        <p class="fs-7 fw-bold">
            دسته بندی ها
        </p>
    </div>
    <ul class="tw-list-none">
        @foreach($categories as $category)
            <li class="blog-category-box">

                    <span><a href="{{ $category->link }}" >{{ $category->name }}</a></span>
                    <div class="badge tw-bg-brand-500 rounded-pill">{{ $category->totalPosts }} </div>

            </li>
        @endforeach
    </ul>
</div>
