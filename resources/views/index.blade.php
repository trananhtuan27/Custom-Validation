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
<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Tuổi</td>
        <td>Địa chỉ</td>
    </tr>
    @foreach( $customer as $key => $value)
        <tr>
            <td>{{++$key}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->age}}</td>
            <td>{{$value->address}}</td>
            <td>
                <a href="{{route('customer.delete',$value->id)}}">Xóa</a>
                <a href="{{route('customer.edit',$value->id)}}">Sửa</a>
            </td>
        </tr>
    @endforeach
</table>
<a type="submit" href="{{route('customer.add')}}">Thêm</a>

</body>
</html>
