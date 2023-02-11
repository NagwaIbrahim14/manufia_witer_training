<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <a href="{{ route('users.create') }}" class="btn btn-primary p-1 m-3">create user</a>

        <table>
            <thead>
                <tr class="bg_gray">
                    <th>id</th>
                    <th>user_name</th>
                    <th>email</th>
                    {{-- <th>user_passwors</th> --}}
                    <th>created_at</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )
                   <tr >
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->user_name}}</td>
                        <td> {{ $user->email }} </td>
                        {{-- <td>{{ $user->user_password }}</td> --}}
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <form action="{{ route('users.show',$user->id) }}">
                                <button type="submit">show</button>
                            </form>
                            <form action="{{ route('users.edit',$user->id) }}">
                                <button type="submit">update</button>

                            </form>
                            <form action="{{ route('users.destroy',$user->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit">delete</button>

                            </form>
                        </td>
                    </tr>

                @endforeach


            </tbody>
        </table>
        {{ $users->links() }}

</body>
</html>
