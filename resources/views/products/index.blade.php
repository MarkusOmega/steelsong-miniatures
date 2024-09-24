<x-main-layout>
    <x-slot:header>
    {{ trans('general.shop') }}
    </x-slot:header>
    
    <div class="banner-large">
        test
    </div>

    <div class="grid-3-3">
        @foreach($products as $product)
       
            <a href="{{ route('product.detail', $product) }}" class="grid-item">
                <div class="grid-item-title"> 
                    <h3>
                    {{ $product->name }} 
                    </h3>    
                </div>
                <div class="grid-item-content"> 
                    <div class="grid-item-description">
                        {{  \Illuminate\Support\Str::limit($product->description, 100, '...') }}
                    </div>
                    <hr>
                    <div class="grid-item-price">
                        {{ $product->price_format }}
                    </div>
                    <div class="grid-item-price">
                        {{ $product->product_status }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
    <div>
        {{ $products->onEachSide(5)->links() }}
    </div>
</x-main-layout>