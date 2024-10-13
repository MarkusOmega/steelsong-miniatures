<x-main-layout>
    <x-slot:header>
    {{ trans('general.news') }}
    </x-slot:header>
    
    <x-banner :banner="$banner"></x-banner>

    <div class="grid-3-3 p-0 mt-4">
        @forelse($news as $newsItem)
            <a href="{{ route('news.detail', $newsItem) }}" class="grid-item-product">
                <div class="grid-item-title"> 
                    <h3>
                    {{ $newsItem->name }} 
                    </h3>    
                </div>
                <div class="grid-item-content"> 
                    <div class="grid-item-description">
    
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="grid-item-price">
                   
                        </div>
                        <div class="grid-item-price">
                            {{ $newsItem->product_status }}
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
        {{ $news->onEachSide(5)->links() }}
    </div>
</x-main-layout>