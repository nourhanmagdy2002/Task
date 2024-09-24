@extends('layout')
@section('title','category submission Page')

@section('content')
    <div class="categories">
        <div class="container">
            @if(session('error'))
                <p class="alert alert-danger">{{session('error')}}</p>

            @endif
            <h2 class="text-center mt-3">Admin Category Submission</h2>
            <form method="post" action="{{route('category.save')}}">
                @csrf
                <div class="mb-3">
                    <label>Category Name</label>
                    <input class="form-control" name="name" required>

                </div>

                <div class="mb-3">
                    <label>Question 1</label>
                    <textarea class="form-control" name="question1" required></textarea>

                </div>

                <div class="mb-3">
                    <label>Question 2</label>
                    <textarea class="form-control" name="question2" required></textarea>

                </div>

                <div class="mb-3">
                    <label>Question 3</label>
                    <textarea class="form-control" name="question3" required></textarea>

                </div>
                <input type="submit" class="btn btn-success" value="submit category" >

            </form>


        </div>

    </div>

@endsection
