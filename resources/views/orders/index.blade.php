@extends('main')
@section('content')

<table>
    <thead>
        <tr class="bg_gray">
            <th>id</th>
            <th>user name</th>
            <th>total</th>
            <th>created at</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->user_name }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->created_at }}</td>
                <td>
                    <form action="{{ route('orders.show',$order->id) }}">
                        <button type="submit">show</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </tbody>
   </table>
   {{ $orders->links() }}



@endsection
