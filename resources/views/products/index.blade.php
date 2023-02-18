@extends('main')
@section('content')

     {{-- alt +tab عشان اتنقل بسهوله --}}
     {{-- ctrl +e     عشان اتنقل بسهوله بين الصفحاى فى vs code--}}
    {{-- <p>{{ $name }}</p>
    <p>{{ $age }}</p> --}}

    <a href="{{ route('products.create') }}" class="btn btn-primary p-1 m-3">create product</a>
    <table>
        <thead>
            <tr class="bg_gray">
                <th>id</th>
                <th>product name</th>
                <th>category name</th>
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

                {{-- eager loding  وانت بتجيب البرودكت هات الكاتيجورى معاك بس بتعمل خاصيه فى الموديل  --}}
                {{-- lazy loading كل برودكت بجيب الكاتيجورى بتاعته --}}
            <tr>
               <td> {{   $product->id }}</td>
               <td> {{   $product->product_name }}</td>
               <td> {{   $product->category->name }}</td>
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



@endsection
