@extends('layout')
@section('title','Login Page')

@section('content')
    <div class="users_data">
        <div class="container">
        <table class="table table-hover table-striped table-active">
            <thead>
            <tr>
                <td>Username</td>
                <td>email</td>
                <td>phone</td>
                <td>date</td>
                <td>Controllers</td>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{$item->username}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->created_at}}</td>
                <td><a><button class="btn btn-primary">Edit</button></a>
                <a href="/delete?modal_name=users&id={{$item->id}}"><button class="btn btn-danger">Delete</button></a></td>

            </tr>
            @endforeach
            </tbody>

        </table>


    </div>

    </div>
@endsection
