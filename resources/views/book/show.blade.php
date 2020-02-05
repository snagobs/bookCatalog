@extends('book/layout')
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-info"> Show Book </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2">
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="title" disabled placeholder="Title" class="form-control"
                                       value="{{ $book->title}}">
                            </div>
                            <div class="form-group">
                                <label> Author </label>
                                <input type="text" name="author" disabled placeholder="author" class="form-control"
                                       value="{{ $book->author }}">
                            </div>
                            <div class="form-group">
                                <label> Genre </label>
                                <input type="text" name="genre" disabled placeholder="Genre" class="form-control"
                                       value="{{ $book->genre }}">
                            </div>
                            <div class="form-group">
                                <label> Price </label>
                                <input class="form-control" disabled placeholder="Price" type="number" name="price"
                                       min="1"
                                       step="0.01" value="{{ $book->price }}">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <textarea style="text-align: left" cols=1000  rows=6 name="description" disabled placeholder="Description" class="form-control">
                                          {{$book->description}}
                                </textarea>
                            </div>
                        <div class="form-group">
                            <a href=" {{ route('book.index')}}" class="btn btn-danger"> Close <i
                                    class="fa fa-times-circle"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
