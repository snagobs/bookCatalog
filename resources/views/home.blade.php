@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="text-align: center;">
                    <div class="card-header" style="color: #ae1c17">WARNING!</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        You do not have permission to access this page!
                    </div>
                    <div class="card-header">
                        @auth
                            <a href="{{ url('/book') }}">Back to Book Store</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

