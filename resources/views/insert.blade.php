<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white">CRUD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
@if(session('save'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Saved Successfully</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Data Delete Successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Update Successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container mt-4">
<div class="row g-3">
    <div class="col-md-5 col-lg-4 order-md-last border-2 p-2 mt-2">
        <h2 class="text-primary text-center bg-warning">Insert Employees Data</h2>
        <form method="post" action="add/done">
            @csrf
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="first_name">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="last_name" >
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="mb-3">
                <button type="submit" class="form-control btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <div class="col-md-7 col-lg-8">
        <h2 class="bg-warning text-primary text-center">Employees List</h2>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last NAme</th>
                <th scope="col">Age</th>
                <th scope="col">City</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $m)
            <tr>
                <th scope="row">{{$m['id']}}</th>
                <td>{{$m['first_name']}}</td>
                <td>{{$m['last_name']}}</td>
                <td>{{$m['age']}}</td>
                <td>{{$m['city']}}</td>
                <td>
                    <a href="edit/{{$m['id']}}"><i class="fas fa-edit"></i></a>
                    <a href="delete/{{$m['id']}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>
