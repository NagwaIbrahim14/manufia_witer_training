@extends('main')
@section('content')

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




@endsection
