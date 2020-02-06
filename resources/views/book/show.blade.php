@extends('book/layout')
<div class="container mt-3 mb-3">
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
                                <label>Description</label>
                                <textarea style="text-align:left; white-space: normal;" cols=1000 rows=5
                                          name="description" disabled placeholder="Description"
                                          class="form-control">{{$book->description}}</textarea>
                            </div>
                            <div class="container box">
                                <form method="post" action="{{url('sendemail/send')}}">
                                    {{ csrf_field() }}
                                    <h5 class="card-title text-info"><br>
                                        If you wanna buy this book, please fill the form bellow.
                                    </h5>
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Your Name</label>
                                        <input type="text" name="name" class="form-control" value=""
                                               placeholder="Your name..." required maxlength="40"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Address</label>
                                        <input type="text" name="address" class="form-control" value=""
                                               placeholder="Your address..." required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Book's Quantity</label>
                                        <input type="number" name="quantity" class="form-control" placeholder="Quantity"
                                               value="1" min="1" max="10"/>
                                    </div>
                                    <br>
                                    <div class="form-group button">
                                        <input type="submit" name="send" class="btn btn-info" value="Order Book"/>
                                    </div>
                                </form>
                                <div class="form-group" style="width: 110px; margin: 0 auto;">
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
</div>

