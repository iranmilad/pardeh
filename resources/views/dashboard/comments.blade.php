@extends('layouts.dashboard')

@section('title', 'دیدگاه ها')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm">
    <p class="fw-bold mb-4 d-flex tw-items-center">
        دیدگاه ها
    </p>
    @if (count($comments)==0)
        <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
            <span>هنوز دیدگاهی ثبت نکردید</span>
        </div>
    @else
        @foreach ($comments as  $comment)
            <div class="card p-3 tw-mt-3 first:tw-mt-0 tw-rounded-xl">
                <div class="p-0 tw-bg-transparent tw-border-none d-flex align-items-start justify-content-between">
                    <div class="tw-flex tw-items-start tw-w-full">
                        <img class="tw-size-16 tw-rounded-xl tw-ml-3" src="{{ Vite::asset('resources/images/posts/1.jpg') }}" />
                        <div class="tw-w-full">
                            <p class="fw-bold">{{ $comment->post->title }}</p>
                            <div class="tw-block">
                                <p class="tw-text-sm comment-body">{{ $comment->text }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </a>
                        <ul class="dropdown-menu *:tw-text-sm">
                            <li><a class="dropdown-item text-danger" href="/dashboard/comment/delete/{{$comment->id}}" data-id="{{ $loop->count }}" >حذف</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
<!--                        User Panel Orders:end-->
@endsection
