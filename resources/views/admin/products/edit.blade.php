<x-admin-layout>
    <div class="container">
        <div class="row mt-5">
            <h2>{{ trans('general.edit product', ['id' => $product->id]) }}</h2>
        </div>
   </div>

    <div class="container">
        <div class="row mt-5">
            <div class="card p-4">
                <form method="POST" action="{{ route('products.update', ['product'=> $product]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @include('admin.products.form')
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>