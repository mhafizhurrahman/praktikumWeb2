@extends('layouts.main')
@section('content')
 <div class="container">
 <div class="row">
    <div class="col-6 mx-auto">
    <div class="card mt-4 mb-4">
        <div class="card-header text-center">
           Halaman Login
        </div>
        <div class="card-body">
                <div class="text-center">
                    <img src="{{asset('img/uniska.jpeg')}}" alt="" width="20%">
                </div>
            <form action="{{Route('login')}}" method="post">
            @csrf

            <div class="from-group mt-2">
                <label for="">Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" value="{{old('passowrd')}}">
            </div>

            <div class="from-group mt-2">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" value="{{old('passowrd')}}">
            </div>

            <div class="from-gruoup mt-2 text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection