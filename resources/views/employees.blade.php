@extends('layouts.mainapp')

@section('title-block')
   employees
@endsection()

@section('content')
    <h1>Employees table</h1>
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">last name</th>
            <th scope="col">Company</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Rename</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $employee)
            <tr>
                <th scope="row">{{$employee->id}}</th>
                <td> {{$employee->first_name}} </td>
                <td> {{$employee->last_name}} </td>
                <td> {{$employee->company}} </td>
                <td> {{$employee->email}} </td>
                <td> {{$employee->phone}} </td>
                <td><a href="{{ url('/employee/'."{$employee->id}")}}" ><button class="btn btn-warning">rename</button></a></td>
                <form action="{{ url('/employee/'."{$employee->id}".'/delete')}}" method="post">
                    @csrf
                <td><button type="submit" class="btn btn-danger">delete</button></td>
                </form>
            </tr>
        @endforeach
        <form action="{{ route('employee-form') }}" method="post">
            @csrf
        <tr >
            <th scope="row"><p>add fields</p></th>
            <td>First Name: <input type="text"  name="first_name"></td>
            <td>Last Name: <input type="text" name="last_name"></td>
            <td>Company: <input type="text" name="company"></td>
            <td>Email: <input type="text" name="email"></td>
            <td>Phone: <input type="text" name="phone"></td>
            <td><button type="submit" class="btn btn-primary">send fields</button></td>
        </tr>
            </form>
        </tbody>
    </table>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>

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



