<div>
<!-- radio-box.blade.php -->
<div class="card">
    <div class="card-header">
        <div class="">
            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#{{ $name }}" aria-expanded="false">
                <span>{{ $title }}</span>
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </div>
    </div>
    <div class="card-body collapse" id="{{ $name }}">
        @foreach ($options as $option)
            <div class="form-check">
                <input class="form-check-input" type="radio" value="{{ $option['value'] }}" name="{{ $name }}" id="{{ $option['id'] }}">
                <label class="form-check-label tw-text-sm" for="{{ $option['id'] }}">
                    {{ $option['label'] }}
                </label>
            </div>
        @endforeach
    </div>
</div>

</div>
