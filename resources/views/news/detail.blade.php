<x-main-layout>
    <div class="row mt-4">
        <div class="col-8">
            <div class="title">
                <h1>{{ $news->name }}</h1>
            </div>
            <div class="tags">

            </div>
            <div class="description mt-4">
                <p>{{ $news->description }} </p>
            </div>
            <div class="price mt-2">

            </div>
            <div class="choices">

            </div>
            <div>
                {{  $news->ProductStatus }}
            </div>
        </div>
        <div class="col-4">

        </div>
    </div>

</x-main-layout>