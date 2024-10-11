@csrf
<div class="mb-3">
    <label class="form-label" for="name">Name </label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name', (!empty($Content->name) ? $Content->name : null))}}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label class="form-label" for="description">Description </label>
    <textarea class="form-control" name="description" id="description">{{ old('name', (!empty($Content->description) ? $Content->description : null))}}</textarea>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
{{--<div class="mb-3">--}}
{{--    <label class="form-label" for="image">Image:</label>--}}
{{--    <input class="form-control" type="file" name="image" id="image" value="{{ old('name', (!empty($Content->image) ? $Content->image : null))}}">--}}
{{--    @error('image')--}}
{{--        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--</div>--}}

<div class="buttons">
    <button class="btn btn-primary" type="submit">Save </button>
</div>