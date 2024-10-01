
<div class="mt-4">
    <form action="{{ route('product.frontendIndex') }}" method="GET">
        <select name="category">
            <option {{ (empty($chosenCategory)) ? 'selected': '' }} value="">All Categories</option>
            @foreach($categories as $category)
                <option {{ (!empty($chosenCategory) && $chosenCategory == $category->name ) ? 'selected': '' }} value="{{ $category->name }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">Filter</button>
    </form>
</div>