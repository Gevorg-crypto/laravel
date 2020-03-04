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
            <th scope="col">email</th>
            <th scope="col">phone</th>
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
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>bob_bush@fat</td>
            <td>+374 91 444 000</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>ann76@twitter</td>
            <td>@+374 91 333 111</td>
        </tr>
        </tbody>
    </table>


@endsection()
