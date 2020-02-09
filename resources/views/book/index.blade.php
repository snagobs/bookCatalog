@extends('./book/layout')
@section('content')

    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-info"> Book List </h5>
            <div class="col-md-4 float-right">
                <form action="/search" method="get" class="form-horizontal">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control">
                        <span class="form-group">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
            </div>
            @if(Auth::user()->is_admin == 1)
                <div class="col-md-12">
                    <a href="{{ url('book/create') }}" class="btn btn-info float-left"><i
                            class="fas fa-plus-circle"></i> Add New Book</a>
                </div>
            @endif
            <div class="container mt-5">
                <table class="table table-striped table-bordered mt-4">
                    <thead>
                    <tr style="text-align: center">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td> {{ $book->title }} </td>
                            <td> {{ $book->author->name }} </td>
                            <td> {{ $book->genre->name }} </td>
                            <td> {{ $book->price }} </td>
                            <td> {{ $book->description }} </td>
                            <td>{{ date('Y-m-d', strtotime($book->created_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($book->updated_at)) }}</td>
                            <td><a href="{{ route('book.show', $book->id )}}" class="badge badge-info">
                                    View </a><br><br>
                                @if(Auth::user()->is_admin == 1)
                                    <a href="{{ route('book.edit', $book->id )}}" class="badge badge-success"> Edit </a>
                                    <br><br>
                                    <form action="{{ route('book.destroy', $book->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="badge btn-danger" type="submit"> Delete</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
