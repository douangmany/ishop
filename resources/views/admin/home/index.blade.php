@extends("layouts.admin")
@section('content')
    <div class="container">
        <div class="mt-3"></div>

        <a href="{{ route('book.add') }}" class="btn btn-primary">Add Book</a>

        @if (Session::get('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $key => $value)
                    <tr>

                        <td>{{ $key + 1 }}}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->type }}</td>

                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <button Type="button" class="btn btn-primary">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
