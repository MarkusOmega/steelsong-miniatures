<x-admin-layout>
    <div class="container">
        <div class="row mt-5">
            <h2>{{ trans('general.edit news', ['id' => $news->id]) }}</h2>
        </div>
   </div>

    <div class="container">
        <div class="row mt-5">
            <div class="card p-4">
                <form method="POST" action="{{ route('news.update', ['news'=> $news]) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @include('admin.news.form')
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>