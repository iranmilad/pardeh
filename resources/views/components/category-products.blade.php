@foreach($products as $product)
<div class="col-sm-12 col-md-6 col-lg-4 position-relative tw-h-auto">
    <x-product mobile name="{{ $product->title }}"  nobtn available="{{ ($product->quantity >0) ? true : false }}" stock="{{ $product->quantity }}" discountedPrice="{{ $product->sale_price }}" discount="{{  $product->discountPercentage  }}" price="{{ $product->price }}" image="{{ $product->img }}" link="{{ $product->link }}" />
</div>
@endforeach
