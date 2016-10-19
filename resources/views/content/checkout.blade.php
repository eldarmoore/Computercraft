@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Checkout page</h1>
        </div>
    </div>


    <div class="row">
    @if($cart)

        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub total</th>
                </tr>
                @foreach($cart as $row)
                    <tr>
                        <td>{{ $row['name'] }}</td>
                        <td align="center">
                            <input type="button" data-op="minus" data-id="{{ $row['id'] }}" class="update-cart" value="-">
                            <input type="text" value="{{ $row['quantity'] }}" size="1" class="text-center">
                            <input type="button" data-op="plus" data-id="{{ $row['id'] }}" class="update-cart" value="+">
                        </td>
                        <td>{{ $row['price'] }}</td>
                        <td>{{ $row['price'] * $row['quantity'] }}$</td>
                    </tr>
                @endforeach
                <tr>
                    <td><b>Total: </b>{{ Cart::getTotal() }}$</td>
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-default" href="{{ url('shop/cart-clear') }}">Clear Cart</a></td>
                </tr>
            </table>
            <p><a href="{{ url('shop/order') }}" class="btn btn-primary">Order now</a></p>
        </div>

    @else

        <div class="col-md-12">
            <p><i>No items in the cart..</i></p>
        </div>

    @endif
    </div>
@endsection