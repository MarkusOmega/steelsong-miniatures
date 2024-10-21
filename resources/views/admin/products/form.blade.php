@csrf
<div class="mb-3">
    <label class="form-label" for="name">Name </label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', (!empty($product->name) ? $product->name : null))}}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="description">Description </label>
    <textarea class="form-control" name="description" id="description">{{ old('name', (!empty($product->description) ? $product->description : null))}}</textarea>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="price">Price </label>
    <input class="form-control" type="number" name="price" id="price" value="{{ old('name', (!empty($product->price) ? $product->price : null))}}">
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="discount">Discount </label>
    <input class="form-control" type="number" name="discount" id="discount" value="{{ old('name', (!empty($product->discount) ? $product->discount : null))}}">
    @error('discount')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="stock">Stock </label>
    <input class="form-control" type="number" name="stock" id="stock" value="{{ old('name', (!empty($product->stock) ? $product->stock : null))}}">
    @error('stock')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="image">Image:</label>
    <input class="form-control" type="file" name="image" id="image" value="{{ old('name', (!empty($product->image) ? $product->image : null))}}">
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    @if(!empty($product) && $product->hasMedia())
        <x-image-previews :product="$product"></x-image-previews>
    @endif
</div>

<div class="mb-3">
    <label class="form-label" for="category">Category:</label>
    <select name="category" id="category">
        <option value="" disabled selected="selected"> Choose an option </option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" {{ (!empty($product) && !empty($product->categories->first()) && $product->categories->first()->id == $category->id) ? 'selected' : '' }}> {{ $category->name }} </option>
        @endforeach
    </select>
</div>

<div class="buttons">
    <button class="btn btn-primary" type="submit">Save </button>
</div>