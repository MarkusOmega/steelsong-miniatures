<x-admin-layout>
    <div class="container">
        <div class="row mt-5">
            <h2>{{ trans('general.contents.create') }}</h2>
        </div>
   </div>

    <div class="container">
        <div class="row mt-5">
            <div class="card p-4">
                <form method="POST" action="{{ route('contents.store') }}" enctype="multipart/form-data">
                    @include('admin.contents.form')
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
