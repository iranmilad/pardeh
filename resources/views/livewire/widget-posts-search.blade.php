<div>
    <div class="all-price d-flex justify-content-between align-items-center mb-3 px-3 pt-2">
        <p class="fs-7 fw-bold">
            جستجو
        </p>
    </div>
    <div class="input-group mb-3">
        <input wire:model.debounce.300ms="searchTerm" type="text" class="form-control fs-8" placeholder="عبارت جستجو را وارد کنید">
        <button wire:click="search" class="btn custom-btn-primary" type="button" id="button-addon2"><i class="fab fa-sistrix fw-md text-white"></i></button>
    </div>
</div>
