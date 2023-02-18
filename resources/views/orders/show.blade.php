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
    <fieldset>
        <legend>orders</legend>
        <table>
            <thead>
                <tr class="bg_gray">
                    <th>id</th>
                    <th>user name</th>
                    <th>total</th>
                    <th>created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->user_name }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <legend>product order</legend>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>product name</td>
                    <td>price </td>
                    <td>quantity</td>
                    <td>created at</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </fieldset>
</body>
</html>
