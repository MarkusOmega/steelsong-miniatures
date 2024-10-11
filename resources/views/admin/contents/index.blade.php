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
                <h2>{{ trans('general.Contents') }}</h2>
                <a href="{{ route('Contents.create') }}" class="btn btn-primary"> Content item aanmaken</a>
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
                    @foreach($Contents as $Content)
                        <tr style="border-bottom:1px solid black; height: 50px">
                            <td>{{ $Content->id }} </td>
                            <td>{{ $Content->name }} </td>
                            <td style="width:150px">
                                <form action="{{ route('products.destroy', $Content) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('products.edit', $Content) }}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row mt-4">
            {{ $Contents->onEachSide(5)->links() }}
        </div>
    </div>
</x-admin-layout>
