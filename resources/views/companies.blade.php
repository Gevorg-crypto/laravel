@extends('layouts.mainapp')

@section('title-block')
    companies
@endsection()

@section('content')
    <h1>Companies table</h1>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Logo</th>
            <th scope="col">Website</th>
            <th scope="col">Rename</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td><img src="https://cdn.shopify.com/shopifycloud/hatchful-web/assets/6fcc76cfd1c59f44d43a485167fb3139.png" alt="Smiley face" height="42" width="42">
            </td>
            <td>tom44@mdo</td>
            <td><button class="btn btn-warning">rename</button></td>
            <td><button class="btn btn-danger">delete</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td><img src="https://i.pinimg.com/originals/33/b8/69/33b869f90619e81763dbf1fccc896d8d.jpg" alt="Smiley face" height="42" width="42">
            <td>bob_bush@fat</td>
            <td><button class="btn btn-warning">rename</button></td>
            <td><button class="btn btn-danger">delete</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td><img src="https://cdn.shopify.com/shopifycloud/hatchful-web/assets/6fcc76cfd1c59f44d43a485167fb3139.png" alt="Smiley face" height="42" width="42">
            <td>ann76@twitter</td>
            <td><button class="btn btn-warning">rename</button></td>
            <td><button class="btn btn-danger">delete</button></td>
        </tr>
        <tr>
            <th scope="row"><p>add fields</p></th>
            <td>Name: <input type="text"></td>
            <td>Email: <input type="text"></td>
            <td>Logo: <input type="file"></td>
            <td>Website: <input type="text"></td>
            <td><button class="btn btn-primary">send fields</button></td>
        </tr>
        </tbody>
    </table>

@endsection()
