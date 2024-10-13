<a href="{{ Route('news.detail',$item) }}" class="grid-item">
    <div class="heading">
        @if(!empty($item->name))
            {{ $item->name }}
        @endif
    </div> 
</a>