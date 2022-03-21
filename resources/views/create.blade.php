<form action="{{route('dealer.store')}}">
    @csrf
    <input type="text" name="code" placeholder="Nhập mã đại lý"><p></p>
    <p style="color: red">{{$errors->has('code')?$errors->first('code'):""}}</p>
    <input type="text" name="name" placeholder="Nhập tên đại lý">
    <p style="color: red">{{$errors->has('name')?$errors->first('name'):""}}</p>
    <input type="text" name="phone" placeholder="Nhập số điện thoại đại lý">
    <p style="color: red">{{$errors->has('phone')?$errors->first('phone'):""}}</p>

    <input type="text" name="email" placeholder="Nhập email đại lý">
    <p style="color: red">{{$errors->has('email')?$errors->first('email'):""}}</p>

    <input type="text" name="address" placeholder="Nhập địa chỉ đại lý">
    <p style="color: red">{{$errors->has('address')?$errors->first('address'):""}}</p>

    <input type="text" name="manager_name" placeholder="Nhập tên người đại lý">
    <p style="color: red">{{$errors->has('manager_name')?$errors->first('manager_name'):""}}</p>

    <select name="status_id" id="">
        @foreach($statuses as $status)
        <option value="{{$status->name}}">{{$status->name}}</option>
        @endforeach
    </select>
    <button>Create</button>
</form>
