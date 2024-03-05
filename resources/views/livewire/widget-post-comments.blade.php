<div>
    <!-- Blog Comments:start -->
    <div class="blog-comments mt-4 form">
        <strong class="fs-5">دیدگاه شما</strong>
        <form wire:submit.prevent="submitComment" class="mt-3 p-3" id="commentForm">
            <div class="row">
                <div class="col-sm-12 col-md-6 mb-3">
                    <input wire:model.defer="name" type="text" class="form-control" autocomplete="off" placeholder="نام ...">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-sm-12 col-md-6 mb-3">
                    <input wire:model.defer="email" type="email" class="form-control" autocomplete="off" placeholder="ایمیل ...">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-sm-12 mb-3">
                    <textarea wire:model.defer="content" class="form-control" autocomplete="off" rows="4" placeholder="دیدگاه ..."></textarea>
                    @error('content') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn custom-btn-primary">ارسال دیدگاه</button>
                </div>
            </div>
        </form>


        <!-- User Already Comments:start -->
        <div class="blog-already-comments mt-5 mb-5">
            <div class="blog-already-comments-header position-relative mb-5">
                <strong class="pe-3">{{ $post->commentsCount()   }} دیدگاه</strong>
                <div class="border-blog border-bottom-gray-300 position-absolute"></div>
            </div>
            <div class="comments mt-4">
                @foreach($post->comments as $comment)
                    @if(!$comment->parentComment) <!-- اگر این کامنت مادر است -->
                        <!-- نمایش کامنت مادر -->
                        <div class="comment-box border-bottom-gray-300 pb-3 mt-3">
                            <!-- جزئیات کامنت مادر -->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="comment-box-right">
                                    <i class="fa-duotone fa-circle-user"></i>
                                    <span class="ps-1 fw-bold">{{ $comment->name }}</span>
                                    <span class="fs-7 ps-5 gray-500 span-time" style="float: left;">
                                        <i class="fa fa-clock ps-2"></i>
                                        {{ \Morilog\Jalali\Jalalian::forge($comment->created_at)->format('%d %B %Y') }}
                                    </span>
                                </div>
                            </div>
                            <p class="pt-3 ps-4">{{ $comment->text }}</p>

                            <!-- نمایش پاسخ‌های این کامنت مادر -->
                            @if($comment->replies->count() > 0)
                                <div class="comment-box-reply ms-5 mt-5">
                                    @foreach($comment->replies as $reply)
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="comment-box-right">
                                                <i class="fa-duotone fa-circle-user"></i>
                                                <span class="ps-1 fw-bold">{{ $reply->name }}</span>
                                                <span class="fs-7 ps-5 gray-500 span-time"  style="float: left;">
                                                    <i class="fa fa-clock ps-2"></i>
                                                    {{ \Morilog\Jalali\Jalalian::forge($reply->created_at)->format('%d %B %Y') }}
                                                </span>
                                            </div>
                                        </div>
                                        <p class="pt-3 ps-4">{{ $reply->text }}</p>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        <!-- User Already Comments:end -->
    </div>
    <!-- Blog Comments:end -->
</div>
