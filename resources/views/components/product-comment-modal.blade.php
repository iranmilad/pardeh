<!-- Modal -->
<div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5 tw-font-semibold" id="commentModal">ثبت دیدگاه</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">کیفیت</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 tw-flex tw-justify-end">
                                <!-- Example rate readonly with default rate -->
                                <x-rating readOnly rate="5" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ارسال</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 tw-flex tw-justify-end">
                                <x-rating name="rate2" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">جنس</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 tw-flex tw-justify-end">
                                <x-rating name="rate3" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">طرح</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 tw-flex tw-justify-end">
                                <x-rating name="rate4" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">متن دیدگاه</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" id="commentsFileUpload" class="btn btn-sm custom-btn-primary tw-rounded-lg">افزودن عکس</button>
                        </div>
                    </div>
                    <input type="hidden" name="file" id="new-msg-file">
                    <input type="hidden" name="product-id" value="product_1">
                </form>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary btn-sm tw-rounded-lg" data-bs-dismiss="modal">بستن</button>
                <button type="button" class="btn btn-primary btn-sm tw-rounded-lg">ثبت دیدگاه</button>
            </div>
        </div>
    </div>
</div>