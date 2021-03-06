<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<form  method="get">
    <input type="text" name="search" placeholder="searching">
    <button>Search</button>
</form>
<a href="{{route('dealer.create')}}">Create New Dealer</a>
<table class="table" border="1">
    <thead>
    <tr>
        <th>#</th>
        <th>Code</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Manager Name</th>
        <th>Status</th>
        <th colspan="2">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dealers as $key=>$dealer)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$dealer->code}}</td>
            <td>{{$dealer->name}}</td>
            <td>{{$dealer->phone}}</td>
            <td>{{$dealer->email}}</td>
            <td>{{$dealer->address}}</td>
            <td>{{$dealer->manager_name}}</td>
            <td>{{$dealer->status->name}}</td>
            <td><a onclick="return confirm('Are you sure?')" href="{{route('dealer.delete', $dealer->id)}}">Delete</a></td>
            <td><a  href="{{route('dealer.edit', $dealer->id)}}">Edit</a></td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</html>
