@extends('layout')
@section('title','Login Page')

@section('content')
    <div class="users_data">
        <div class="container">
            <table class="table table-hover table-striped table-active">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Ticket type</td>
                    <td>info</td>
                    <td>date</td>
                    <td>Controllers</td>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->info}}</td>
                        <td>{{$item->created_at}}</td>
                        <td><a><button class="btn btn-primary">Edit</button></a>
                            <a><button class="btn btn-danger">Delete</button></a></td>

                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>

    </div>
@endsection
