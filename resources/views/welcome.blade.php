<x-main-layout>
    @if(!empty($banner))
        <div class="banner-large">
            {{ $banner->name }}
        </div>
    @endif
    
    <div class="grid-1-2 p-0 mt-4">
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
    </div>

    <div class="grid-3-3 p-0 mt-4">
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
        <x-grid-item> </x-grid-item>
    </div>
</x-main-layout>