<x-main-layout>
    <x-banner :banner="$banner"></x-banner>

    <div class="grid-1-2 p-0 mt-4">
        @foreach ($newsHiglights as $newsHiglight)
            <x-grid-item :item="$newsHiglight"> </x-grid-item>
        @endforeach
    </div>

    <div class="grid-3-3 p-0 mt-4">
        @foreach ($newsItems as $newsItem)
            <x-grid-item :item="$newsItem"> </x-grid-item>
        @endforeach
    </div>
</x-main-layout>