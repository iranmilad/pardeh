@foreach($products as $product)
<div class="col-sm-12 col-md-6 col-lg-4 position-relative tw-h-auto">
    @php
        if(request()->has('installer'))
            $link = $product->link ."?installer=".request()->input('installer');
        elseif(request()->has('design'))
            $link = $product->link ."?design=".request()->input('design');
        elseif(request()->has('sewing'))
            $link = $product->link ."?sewing=".request()->input('sewing');
        else
            $link = $peoduct->link;
    @endphp
    <x-product mobile name="{{ $product->title }}"  nobtn available="{{ ($product->quantity >0) ? true : false }}" stock="{{ $product->quantity }}" discountedPrice="{{ $product->sale_price }}" discount="{{  $product->discountPercentage  }}" price="{{ $product->price }}" image="{{ $product->img }}" link="{{ $link }}" />
</div>
@endforeach
