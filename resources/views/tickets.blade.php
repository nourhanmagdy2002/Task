@extends('layout')
@section('title','Register Page')

@section('content')
    <div class="container">
        <h1 class="text-center">Ticket Submission</h1>

        <form method="post" action="{{ route('tickets.save') }}">
            @csrf
            @if(session('submit'))
                <p class="alert alert-success">{{session('submit')}}</p>
            @endif

            <div class="mb-3">
                <label>Title</label>
                <input class="form-control" name="title" value="{{old('title')}}">
                @error('title')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>


            <div class="mb-3">
               <select name="type" class="form-control">
                   <option>
                       Request
                   </option>
                   <option>
                      Problem
                   </option>
               </select>

                @error('type')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>


            <div class="mb-3">
                <label>Info</label>
                <textarea class="form-control" name="info"  placeholder="Your message" value="">{{old('email')}}</textarea>
                @error('info')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>




            <input type="submit" class="btn btn-success" value="Submit Ticket" >

        </form>

    </div>




@endsection
