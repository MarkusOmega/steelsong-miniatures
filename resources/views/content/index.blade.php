<x-main-layout>
    <x-slot:header>
    {{ trans('general.lore') }}
    </x-slot:header>
    
    <x-banner :banner="$banner"></x-banner>

    <div class="grid-3-3 p-0 mt-4">
        @forelse($contents as $content)
            <a href="{{ route('content.detail', $content) }}" class="grid-item-product">
                <div class="grid-item-title"> 
                    <h3>
                    {{ $content->name }} 
                    </h3>    
                </div>
                <div class="grid-item-content"> 
                    <div class="grid-item-description">
    
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="grid-item-price">
                   
                        </div>
                    </div>
                </div>
            </a>
        @empty
        <div>
            {{ trans('no content found') }}
        </div>
        
        @endforelse
    </div>
    <div class="p-0">
        {{ $contents->onEachSide(5)->links() }}
    </div>
</x-main-layout>