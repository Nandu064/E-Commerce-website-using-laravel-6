@extends('admin.layout.admin')
    @section('content')
        <h3>Products</h3>
        <ul>
            @forelse ($products as $product)
            <li>
                <h3>Name of the product:{{$product->name}} </h3>
            </li>
            @empty
                <h3>No Products to display</h3>
            @endforelse
            
        </ul>
    @endsection