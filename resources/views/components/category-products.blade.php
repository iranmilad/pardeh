@foreach($products as $product)
<div class="col-sm-12 col-md-6 col-lg-4 position-relative tw-h-auto">
    <x-product mobile nobtn
    name="{{ $product['name'] ?? null }}"
    stock="{{ $product['stock'] ?? null }}" 
    price="{{ $product['regular_price'] ?? null }}" 
    discountedPrice="{{ $product['sale_price'] ?? null }}" 
    discount="{{ $product['discount'] ?? null }}"
    image="{{ $product['img'] ?? null }}" />
</div>
@endforeach