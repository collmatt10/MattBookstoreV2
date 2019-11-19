@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    Welcome to Matts Bookstore! :) <a href="{{route('admin.books.index')}}">Books</a>

                  <br/>
                  Learn more <a href="{{route('about')}}">about us</a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
