@extends('layouts.main')
    @section('content')
    <h3>Items in Cart</h3>
        
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>Size</th>
   
            </tr>
        </thead>
        <tbody>
           @foreach ($cartItems as $cartItem)
                <tr>
                <td>{{$cartItem->name}}</td>
                <td>{{$cartItem->price}}</td>
                <td>
                    {{$cartItem->quantity}}
                </td>
                
                <td>medium</td>
                
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection