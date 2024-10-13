@if (!empty($product->DiscountFormat))
    <s>
@else
    <strong>
@endif

{{ $product->PriceFormat }} 

@if (!empty($product->DiscountFormat))
    </s>
@else
    </strong>
@endif

@if(!empty($product->discount_price)) <strong>{{ $product->DiscountFormat }}</strong> @endif