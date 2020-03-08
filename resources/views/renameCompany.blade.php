@extends('layouts.mainapp')

@section('title-block')
    rename company
@endsection()

@section('content')
    <h1>Company table with <span style="color: darkred"> {{$data->id}} </span> id</h1>
    <form action="{{ route('company-update', $data->id) }}" method="post">
        @csrf
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Logo</th>
                <th scope="col">Website</th>
                <th scope="col">Rename</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" placeholder="{{$data->name}}" name="name" value="{{$data->name}}"></td>
                <td><input type="text" placeholder="{{$data->email}}" name="last_name" value="{{$data->email}}"></td>
                <td><input type="file" placeholder="{{$data->logo}}" name="company" value="{{$data->logo}}"></td>
                <td><input type="text" placeholder="{{$data->website}}" name="email" value="{{$data->website}}"></td>
                <td><button class="btn btn-warning">save</button></td>
            </tr>
            </tbody>
        </table>
    </form>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}<li>
                @endforeach()

            </ul>
        </div>
    @endif


@endsection()




