<form action="{{route('dealer.update', $dealer->id)}}" method="post" >
    @csrf
    <input type="text" name="code" value="{{$dealer->code}}">
    <p style="color: red">{{$errors->has('code')?$errors->first('code'):""}}</p>
    <input type="text" name="name" value="{{$dealer->name}}">
    <p style="color: red">{{$errors->has('name')?$errors->first('name'):""}}</p>

    <input type="text" name="phone" value="{{$dealer->phone}}">
    <p style="color: red">{{$errors->has('phone')?$errors->first('phone'):""}}</p>
    <input type="text" name="email" value="{{$dealer->email}}">
    <p style="color: red">{{$errors->has('email')?$errors->first('email'):""}}</p>

    <input type="text" name="address" value="{{$dealer->address}}">
    <p style="color: red">{{$errors->has('address')?$errors->first('address'):""}}</p>

    <input type="text" name="manager_name" value="{{$dealer->manager_name}}">
    <p style="color: red">{{$errors->has('manager_name')?$errors->first('manager_name'):""}}</p>

    <select name="status_id" id="">
        @foreach($statuses as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>
        @endforeach
    </select>
    <button>Update</button>
</form>
