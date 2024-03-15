<div>
<!-- color-options.blade.php -->
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
        <div class="tw-pr-0">
            <div class="flex tw-flex-col tw-justify-start tw-space-y-2">
                @foreach ($options as $option)
                    <div class="parde-color parde-color-row">
                        <label class="">
                            <svg width="35" height="35" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="50" fill="{{ $option['color'] }}" />
                            </svg>
                            <input type="radio" name="{{ $name }}" value="{{ $option['value'] }}">
                        </label>
                        <span>{{ $option['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>
