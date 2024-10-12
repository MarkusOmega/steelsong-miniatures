<x-admin-layout>
    <div class="container">
        <div class="row mt-5">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            <div class="d-flex justify-content-between">
                <h2>{{ trans('general.news') }}</h2>
                <a href="{{ route('news.create') }}" class="btn btn-primary"> News item aanmaken</a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <table style="width:100%">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $newsItem)
                        <tr style="border-bottom:1px solid black; height: 50px">
                            <td>{{ $newsItem->id }} </td>
                            <td>{{ $newsItem->name }} </td>
                            <td style="width:150px">
                                <form action="{{ route('news.destroy', $newsItem) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('news.edit', $newsItem) }}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            {{ $news->onEachSide(5)->links() }}
        </div>
    </div>
</x-admin-layout>
