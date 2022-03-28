@extends("layouts.admin")
@section('content')
    <div class="container">
        <div class="mt-3"></div>
        <form action="{{ route('book.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="">type</label>
                <input type="text" name="type" class="form-control">
                @error('type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>

    </div>
@endsection
