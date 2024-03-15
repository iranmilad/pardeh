<div>
<div class="card">
    <div class="card-header">
        <div class="">
            <button type="button" class="btn card-title tw-py-0.5 tw-flex tw-items-center tw-justify-between tw-w-full" data-bs-toggle="collapse" data-bs-target="#{{ $name }}" aria-expanded="false">
                <span>{{ $title }}</span>
                <i class="fa-solid fa-chevron-left"></i>
            </button>
        </div>
    </div>
    <div class="card-body collapse tw-flex tw-justify-start tw-flex-col" id="{{ $name }}">
        @foreach ($options as $index => $option)
            <label class="category-label-checkbox" for="{{ $option['id'] }}">
                <span class="tw-text-xs">
                    {{ $option['label'] }}
                </span>
                <input type="radio" name="{{ $option['name'] }}" id="{{ $option['id'] }}" value="{{ $option['value'] }}">
            </label>
        @endforeach
    </div>
</div>

</div>
