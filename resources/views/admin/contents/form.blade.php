@csrf
<div class="mb-3">
    <label class="form-label" for="name">Name </label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', (!empty($content->name) ? $content->name : null))}}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="description">Description </label>
    <textarea class="form-control" name="description" id="description">{{ old('name', (!empty($content->description) ? $content->description : null))}}</textarea>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
{{--<div class="mb-3">--}}
{{--    <label class="form-label" for="image">Image:</label>--}}
{{--    <input class="form-control" type="file" name="image" id="image" value="{{ old('name', (!empty($content->image) ? $content->image : null))}}">--}}
{{--    @error('image')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--</div>--}}

<div class="mb-3">
    <label class="form-label" for="description">Linked to product </label>
    <select name="product_id" id="product_id">
        <option value="" selected="selected" disabled>Choose a product to link to</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}" {{ (!empty($product) && $product->id == $content->product_id) ? 'selected' : '' }}>{{ $product->name }}</option>
        @endforeach
    </select>
    @error('product_id')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>


<div class="buttons">
    <button class="btn btn-primary" type="submit">Save </button>
</div>

<script>
      tinymce.init({
        selector: '#description',
        license_key: 'gpl|{{ config('tinymce.licenseKey')}}'
      });
</script>
