@extends('layouts.mainapp')

@section('title-block')
   employees
@endsection()

@section('content')
    <h1>Employees table</h1>
    <form action="{{ route('employee-form') }}" method="post">
        @csrf
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">last name</th>
            <th scope="col">Company</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">rename</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>tom44@mdo</td>
            <td>+374 91 000 222</td>
            <td><button class="btn btn-warning">rename</button></td>
            <td><button class="btn btn-danger">delete</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>bob_bush@fat</td>
            <td>+374 91 444 000</td>
            <td><button class="btn btn-warning">rename</button></td>
            <td><button class="btn btn-danger">delete</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>ann76@twitter</td>
            <td>@+374 91 333 111</td>
            <td><button class="btn btn-warning">rename</button></td>
            <td><button class="btn btn-danger">delete</button></td>
        </tr>
        <tr >
            <th scope="row"><p>add fields</p></th>
            <td>First Name: <input type="text"  name="first_name"></td>
            <td>Last Name: <input type="text" name="last_name"></td>
            <td>Company: <input type="text" name="company"></td>
            <td>Email: <input type="text" name="email"></td>
            <td>Phone: <input type="text" name="phone"></td>
            <td><button type="submit" class="btn btn-primary">send fields</button></td>
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
