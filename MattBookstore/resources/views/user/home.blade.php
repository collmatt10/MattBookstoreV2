@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as an ordinary user!
                      </br>
                      Hi     {{ Auth::user()->name    }}
                      </br>
                      Email:    {{ Auth::user()->email   }}
                      </br>
                      Address:  {{ Auth::user()->customer->address    }}
                      </br>
                      Phone :    {{ Auth::user()->customer->phone   }}
                      </br>

                    <a href="{{route('user.books.index')}}">Books</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
