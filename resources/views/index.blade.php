<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('dealer.create')}}">Create New Dealer</a>
<table border="1">
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
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
