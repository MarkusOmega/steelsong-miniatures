<x-main-layout>
    <x-slot:header>
    {{ trans('general.shop') }}
    </x-slot:header>
    
    @if(!empty($banner))
        <div class="banner-large">
            {{ $banner->name }}
        </div>
    @endif

    <x-product-filter :categories="$categories" :chosenCategory="$category"> </x-product-filter>

    <div class="grid-3-3 p-0 mt-4">
        @forelse($products as $product)
            <a href="{{ route('product.detail', $product) }}" class="grid-item-product">
                <div class="grid-item-title"> 
                    <h3>
                    {{ $product->name }} 
                    </h3>    
                </div>
                <div class="grid-item-content"> 
                    <div class="grid-item-description">
                        {{ $product->ShortDescription }}
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="grid-item-price">
                            <strong>{{ $product->PriceFormat }}</strong>
                        </div>
                        <div class="grid-item-price">
                            {{ $product->product_status }}
                        </div>
                    </div>
                </div>
            </a>
        @empty
        <div>
            {{ trans('no products found') }}
        </div>
        
        @endforelse
    </div>
    <div class="p-0">
        {{ $products->onEachSide(5)->links() }}
    </div>
</x-main-layout>