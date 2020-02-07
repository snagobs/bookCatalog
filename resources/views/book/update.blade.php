@extends('./book/layout')
@section('content')

    <div class="container mt-3 mb-3">
        <form action="{{ route('book.update', $book->id) }}" method="post">
            {{csrf_field() }}
            @method('PATCH')
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-info"> Update Book </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 offset-sm-2">
                                    {{--  print success message  --}}
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif
                                    <div class="form-group" {{ $errors->has('title') ? 'has-error' : ''}}>
                                        <label>Title</label>
                                        <input type="text" name="title" placeholder="Title" class="form-control"
                                               value="{{ $book->title }}">
                                        {!! $errors->first('title', '<small class="text-danger">:message</small>') !!}
                                    </div>
                                    <div class="form-group" {{ $errors->has('dob') ? 'has-error' : ''}}>
                                        <label>Author</label>
                                        <input type="text" name="author" placeholder="Author" class="form-control"
                                               value="{{ $book->author }}">
                                        {!! $errors->first('author', '<small class="text-danger">:message</small>') !!}
                                    </div>
                                    <div class="form-group" {{ $errors->has('genre') ? 'has-error' : ''}}>
                                        <label>Genre</label>
                                        <input type="text" name="genre" placeholder="Genre" class="form-control"
                                               value="{{ $book->genre }}">
                                        {!! $errors->first('genre', '<small class="text-danger">:message </small>') !!}
                                    </div>
                                    <div class="form-group" {{ $errors->has('price') ? 'has-error' : ''}}>
                                        <label>Price</label>
                                        <input class="form-control" placeholder="Price" type="number" min="1"
                                               step="0.01" name="price"
                                               value="{{ $book->price }}">
                                        {!! $errors->first('price', '<small class="text-danger">:message </small>') !!}
                                    </div>
                                    <div class="form-group" {{ $errors->has('description') ? 'has-error' : ''}}>
                                        <label>Description</label>
                                        <textarea name="description" style="text-align:left; white-space: normal;"
                                                  cols=1000 rows=6 placeholder="Description"
                                                  class="form-control">{{ $book->description }}</textarea>
                                        {!! $errors->first('description', '<small class="text-danger">:message </small>') !!}
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" name="submit"> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection






