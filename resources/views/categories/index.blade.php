@extends('main')
@section('content')

<table>
    <thead>
        <tr class="bg_gray">
            <th>id</th>
            <th>category name</th>
            <th>created at</th>
            <th>actions</th>

        </tr>

    </thead>
    <tbody>
       @foreach ( $categories as $category)
       <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{ $category->created_at }}</td>
        <td>
            <form action="{{ route('categories.show',$category->id) }}">
                <button type="submit">show</button>
            </form>
            {{-- <form action="{{ route('categories.edit',$category->id) }}">
                <button type="submit">update</button>
            </form> --}}

        </td>
       </tr>

       @endforeach
    </tbody>
</table>


@endsection
