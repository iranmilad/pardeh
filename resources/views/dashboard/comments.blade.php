@extends('layouts.dashboard')

@section('title', 'دیدگاه ها')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4 d-flex tw-items-center">
        دیدگاه ها
    </p>
    <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
        <span>هنوز دیدگاهی ثبت نکردید</span>
    </div>
    <?php for ($i = 0; $i < 2; $i++) : ?>
        <?php $id = uniqid('') ?>
        <div class="card p-3 tw-mt-3 first:tw-mt-0 tw-rounded-lg">
            <div class="p-0 tw-bg-transparent tw-border-none d-flex align-items-start justify-content-between">
                <div class="tw-flex tw-items-start tw-w-full">
                    <img class="tw-size-16 tw-rounded-lg tw-ml-3" src="{{ Vite::asset('resources/images/posts/1.jpg') }}" />
                    <div class="tw-w-full">
                        <p class="fw-bold">کالای تست</p>
                        <div class="tw-block">
                            <p class="tw-text-sm comment-body">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                        </div>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                    <ul class="dropdown-menu *:tw-text-sm">
                        <li><button class="dropdown-item text-danger deleteSentComment" data-id="<?= $id; ?>" >حذف</button></li>
                    </ul>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<!--                        User Panel Orders:end-->
@endsection