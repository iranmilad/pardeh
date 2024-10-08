@extends('layouts.dashboard')

<!-- in api.php line 70 we can use data to show messages between user and admin  -->
<!--  -->

@section('title', 'پیام ها')

@section('dashboard-content')
<!--                        User Panel Orders:start-->
<div class="user-panel-orders border border-radius-xl p-3 mb-3 mt-3 mt-lg-0 tw-shadow-sm tw-h-full tw-relative" id="messages-whole-box">
    <div class="tw-flex tw-items-center tw-justify-between">
        <p class="fw-bold mb-4 d-flex tw-items-center">
            پیام ها
        </p>
        <button id="sendMessageBtn" data-bs-toggle="collapse" data-bs-target="#sendBox" aria-expanded="false" aria-controls="sendBox" class="btn btn-sm custom-btn-primary rounded-pill fw-7 px-3">ارسال پیام</button>
    </div>
    <div class="collapse" id="sendBox">
        <form action="{{ route('sessions.store') }}" method="post" class="row">
            @csrf
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="mb-3">
                    <label for="department" class="form-label">بخش</label>
                    <select class="form-select" name="department" id="department">
                        <option selected value="7">مدیریت</option>
                        @foreach ($user->memberLists as $member)
                            <option selected value="{{ $member->id }}">{{ $member->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-6">
                <div class="mb-3">
                    <label for="priority" class="form-label">اولویت</label>
                    <select class="form-select" name="priority" id="priority">
                        <option value="1">زیاد</option>
                        <option selected value="2">متوسط</option>
                        <option value="3">کم</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="mb-3">
                    <label for="title" class="form-label">عنوان</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="عنوان پیام">
                </div>
            </div>

            <div class="col-12">
                <div class="mb-3">
                    <label for="message" class="form-label">متن پیام</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>
            </div>
            <div class="col-12">
                <input type="hidden" id="new-msg-file" name="file" value="">
                <button type="button" class="btn custom-btn-dark rounded-pill tw-max-w-max px-3" id="new-message-file">
                <i class="fa-regular fa-file-import"></i>
                    آپلود فایل</button>
                <button type="submit" class="btn custom-btn-primary rounded-pill tw-max-w-max px-3">ثبت پیام</button>
            </div>
        </form>
    </div>
    @if (!isset($user->sessions))
        <div class="p-4 tw-w-auto tw-mx-auto tw-text-center">
            <span>هنوز هیچ پیامی ندارید.</span>
        </div>
    @else
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">همه</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="sent-tab" data-bs-toggle="pill" data-bs-target="#sent" type="button" role="tab" aria-controls="sent" aria-selected="true">تیکت پشتیبانی </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="system-tab" data-bs-toggle="pill" data-bs-target="#system" type="button" role="tab" aria-controls="system" aria-selected="false">پیام های </button>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="all" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                @foreach ($user->sessions as $session)

                        <div class="card border-bottom messages-private-box" data-id="{{ $session->id }}">
                            <div class="tw-flex tw-items-center tw-justify-between">
                                <div class="tw-flex">
                                    <div class="tw-w-14 tw-h-14 tw-text-gray-400 fs-2 tw-bg-gray-200 tw-rounded-xl tw-flex tw-items-center tw-justify-center">
                                        <i class="fa-light fa-user"></i>
                                    </div>
                                    <div class="tw-flex tw-flex-col tw-mr-4">
                                        <span class="tw-text-base">موضوع: {{  $session->title }}</span>
                                        <span class="tw-text-gray-400 tw-text-sm">بخش: <span class="tw-text-gray-500 fw-bold">{{  $session->memberList->title ?? 'سیستم' }}</span></span>
                                    </div>
                                </div>
                                <div class="tw-flex tw-flex-col tw-justify-start">
                                    <span class="tw-text-xs">{{ $session->getCreateAtShamsiAttribute() }}</span>
                                </div>
                            </div>
                        </div>



                @endforeach

            </div>
            <div class="tab-pane tw-space-y-0" id="sent" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                @foreach ($user->sessions as $session)
                    @if ($session->memberList!=null)
                        <div class="card border-bottom messages-private-box" data-id="{{ $session->id }}">
                            <div class="tw-flex tw-items-center tw-justify-between">
                                <div class="tw-flex">
                                    <div class="tw-w-14 tw-h-14 tw-text-gray-400 fs-2 tw-bg-gray-200 tw-rounded-xl tw-flex tw-items-center tw-justify-center">
                                        <i class="fa-light fa-user"></i>
                                    </div>
                                    <div class="tw-flex tw-flex-col tw-mr-4">
                                        <span class="tw-text-base">موضوع: {{  $session->title }}</span>
                                        <span class="tw-text-gray-400 tw-text-sm">بخش: <span class="tw-text-gray-500 fw-bold">{{  $session->memberList->title ?? 'سیستم' }}</span></span>
                                    </div>
                                </div>
                                <div class="tw-flex tw-flex-col tw-justify-start">
                                    <span class="tw-text-xs">{{ $session->getCreateAtShamsiAttribute() }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="tab-pane" id="system" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                @foreach ($user->sessions as $session)
                    @if ($session->memberList==null)
                        <div class="card p-3 tw-mt-3 first:tw-mt-0">
                            <div class="card-header p-0 tw-bg-transparent tw-border-none d-flex align-items-center justify-content-between">
                                <p>پیام از طرف <span class="fw-bold tw-text-[var(--primary)]">ادمین</span><span class="fs-8 ms-3 tw-text-gray-400" dir="ltr">{{ $session->getCreateAtShamsiAttribute() }}</span></p>
                                <button class="btn btn-sm custom-btn-primary rounded-pill px-3" data-bs-toggle="collapse" data-bs-target="#id_{{ $session->id }}">
                                    نمایش
                                </button>
                            </div>
                            <div class="collapse " id="id_{{ $session->id }}">
                                <div class="tw-p-3 tw-bg-gray-50 tw-rounded-xl mt-3">
                                    <p>{{ $session->messages->first()->message }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    @endif

    <!-- CHATBOX for messages between user and admin and other people -->
    <x-chat  />

    <!-- a modal to upload images -->
    <x-uploadFileModal />

</div>
<!--                        User Panel Orders:end-->
@endsection
