<div>
    <!--                            Blog Post Header Detail:start-->
    <div class="blog-post-header-detail mt-4 d-flex justify-content-between align-items-center">
        <!--                                Blog Post Header Detail Right:start-->
        <div class="blog-post-header-detail-right">
            <!--                                    Blog Post Author:start-->
            <div class="blog-post-author">
                <i class="fa-duotone fa-circle-user"></i>

                <span class="ps-1 fs-7 gray-600"> {{ $post->user->fullName }}</span>
                <span class="fs-7 ps-4 gray-600 span-time"  style="float: left;">
                    <i class="fa fa-clock"></i>
                    {{ \Morilog\Jalali\Jalalian::forge($post->created_at)->format('%d %B %Y') }}
                </span>

            </div>
            <!--                                    Blog Post Author:end-->
        </div>
        <!--                                Blog Post Header Detail Right:end-->
    </div>
    <!--                            Blog Post Header Detail:end-->
</div>
