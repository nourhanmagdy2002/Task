@extends('layout')
@section('title','Register Page')

@section('content')
    <div class="container">
        <h1 class="text-center"> Registration</h1>
        <h2 class="text-center"> Here You Can Join US </h2>

        <form method="post" action="{{ route('register.store') }}">
            @csrf


            @if(session('register'))
                <p class="alert alert-success">{{session('register')}}</p>
            @endif

            @if(session('noregister'))
                <p class="alert alert-danger">{{session('noregister')}}</p>
            @endif

            <div class="mb-3">
                <label>username</label>
                <input class="form-control" name="username" value="{{old('username')}}">
                @error('username')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>


            <div class="mb-3">
                <label>Phone</label>
                <input class="form-control" name="phone" value="{{old('phone')}}">
                @error('phone')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>


            <div class="mb-3">
                <label>Email</label>
                <input class="form-control" name="email" value="{{old('email')}}">
                @error('email')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>


            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" name="password" value="{{old('password')}}">
                @error('password')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>

            <input type="submit" class="btn btn-success" value="Register" >

        </form>

    </div>

    </div>

@endsection
