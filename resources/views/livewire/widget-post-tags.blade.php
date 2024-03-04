<div>
    @if (count($post->tags))
        <div class="blog-keywords mt-4 pb-4 border-bottom-gray-300">
            <span>برچسب ها :</span>
            @foreach ($post->tags as $tag)
            <a href="{{ $tag->link }}">
                <span class="badge bg-secondary">{{ $tag->name }}</span>
            </a>
            @endforeach

        </div>
    @endif
</div>
