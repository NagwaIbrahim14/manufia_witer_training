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
        <legend>category</legend>
        <table>
            <thead>
                <tr class="bg_gray">
                    <th>id</th>
                    <th>category name</th>
                    <th>created at</th>
                    {{-- <th>actions</th> --}}

                </tr>

            </thead>
            <tbody>
               <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
               </tr>
            </tbody>
        </table>
    </fieldset>

    <fieldset>
        <legend>products</legend>
        <table>
            <thead>
                <tr class="bg_gray">
                    <th>id</th>
                    <th>product name</th>
                    <th>price</th>
                    <th>quantity</th>

                    <th>created at</th>
                    {{-- <th>actions</th> --}}

                </tr>

            </thead>
            <tbody>
               @foreach ( $category->getPaginatedProducts() as $product )
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->created_at}}</td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </fieldset>
    {{ $category->getPaginatedProducts()->links() }};
</body>
</html>
