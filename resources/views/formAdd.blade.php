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
<form method="post" action="{{route("customer.create")}}">
    @csrf
    <table>
        <tr>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td><input type="number" name="age"></td>
        </tr>
        <tr>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td><button type="submit">thêm</button> </td>
        </tr>

    </table>
</form>
</body>
</html>
