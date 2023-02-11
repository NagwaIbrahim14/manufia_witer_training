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
     {{-- alt +tab عشان اتنقل بسهوله --}}
     {{-- ctrl +e     عشان اتنقل بسهوله بين الصفحاى فى vs code--}}
    {{-- <p>{{ $name }}</p>
    <p>{{ $age }}</p> --}}

    <a href="{{ route('products.create') }}" class="btn btn-primary p-1 m-3">create product</a>
    <table>
        <thead>
            <tr class="bg_gray">
                <th>id</th>
                <th>name</th>
                <th>quantity</th>
                <th>price</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- {{ dd($products->first()) }} --}}
            {{-- بلوب على الكى لتاع الاسوشياتف ارراى --}}
            @foreach ($products as $product)
             {{-- لازم تكون جوا االوب  --}}
            {{-- {{   dd($loop) }}  --}}

            {{-- فى حاله لو عايزه الون اول صف فى التايبل  --}}
            {{-- <tr class=" @if ( $loop->first ) bg_gray @endif"> --}}
            <tr>
               <td> {{   $product->id }}</td>
               <td> {{   $product->product_name }}</td>
               <td> {{   $product->quantity }}</td>
               <td> {{  $product->price }}</td>
               <td> {{  $product->created_at }}</td>

               <td>
                <form action="{{ route('products.show',$product->id) }}">
                    <button type="submit">show</button>
                </form>

                   <form action="{{ route('products.destroy',$product->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit">delete</button>
                   </form>
                <form action="{{ route('products.edit',$product->id) }}">
                    <button type='submit'>update</button>
                </form>
               </td>

            </tr>
             @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
    {{-- <script src="{{ asset('js/index.js') }}"></script> --}}
</body>
</html>
