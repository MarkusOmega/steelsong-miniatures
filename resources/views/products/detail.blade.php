<x-main-layout>
    <!-- <div class="banner-large">
        @if(!empty($product->image))
            <img src="{{ Storage::disk('public')->url($product->image) }}" alt="Uploaded File">
        @endif
    </div> -->

    <div class="row mt-4">
        <div class="col-6">
            <div class="image">
            @if($product->hasMedia())
                <img src="{{ $product->getFirstMedia()->getUrl() }}" alt="product image">
            @else
            <img src="{{url('/images/image-placeholder.png')}}" alt="product placeholder">
            @endif
            </div>
        </div>
        <div class="col-6">
            <div class="title">
                <h1>{{ $product->name }}</h1>
            </div>
            <div class="tags">
                @foreach ($product->categories as $category )
                    <span class="tag bg-dark rounded-circle p-2 text-white">{{ $category->name }}</span>
                @endforeach
            </div>
            <div class="description mt-4">
                <p>{{ $product->description }} </p>
            </div>
            <div class="price mt-2">
                <strong>{{ $product->PriceFormat }}</strong>
            </div>
            <div class="choices">

            </div>
            <div>
                {{  $product->ProductStatus }}
            </div>
            <div class="submit mt-2">
                <button type="submit">order</button>
            </div>
        </div>
    </div>

</x-main-layout>