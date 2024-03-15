<div>
    <!-- resources/views/livewire/switch-box.blade.php -->
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
            @foreach ($options as $index => $option)
                <div class="form-check form-switch">
                    <label class="form-check-label tw-text-sm" for="{{ $option['id'] }}">
                        {{ $option['label'] }}
                    </label>
                    <input class="form-check-input" type="checkbox" value="{{ $option['value'] }}" name="{{ $option['id'] }}" id="{{ $option['id'] }}">
                </div>
            @endforeach
        </div>
    </div>

</div>
