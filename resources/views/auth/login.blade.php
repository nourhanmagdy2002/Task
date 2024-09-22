@extends('layout')
@section('title','Login Page')

@section('content')



<div  class="loginn">
    <div class="container">

        <h1 class="text-center"> User Login </h1>
        @if(session('login'))
            <p class="alert alert-success">{{session('login')}}</p>
        @endif

            @if(session('loginfail'))
                <p class="alert alert-danger">{{session('loginfail')}}</p>
            @endif
        <form method="post" action="{{ route('login.save') }}">
            @csrf

            <div class="mb-3">
            <label>Phone</label>
            <input class="form-control" name="phone" value="{{old('phone')}}">
                @error('phone')
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

            <input type="submit" class="btn btn-success" value="Login" >

        </form>

    </div>

</div>
@endsection
