<x-main-layout>
    <x-slot:header>
    {{ $product->name }}
    </x-slot:header>
    
    <div class="banner-large">

    @if(!empty($product->image))
        <img src="{{ Storage::disk('public')->url($product->image) }}" alt="Uploaded File">
    @endif
    </div>

</x-main-layout>