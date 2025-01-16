@extends('product.layout.app')
@section('content')
<h1>Products Greater Than $50</h1>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->created_at->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

    <br>
    <a href="{{ route('product.create') }}" >Create New Product</a>
    <a href="{{ route('product.index') }}">View all Product</a>
@endsection
