<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>
<body>
     <table>
        <thead>
            <tr class="bg_gray">
                <th>id</th>
                <th>user_name</th>
                <th>user_password</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>

                <td>{{ $user->user_name }}</td>
                <td>{{ $user->user_password }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        </tbody>
     </table>
</body>
</html>
