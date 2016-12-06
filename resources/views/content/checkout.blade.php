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
            <table class="table" style="font-size: 1em">
                <tr style="background-color: #2e3436; color: #FFFFFF;">
                    <th class="col-md-8">Product</th>
                    <th class="col-md-2" style="text-align: center">Quantity</th>
                    <th class="col-md-1">Price</th>
                    <th class="col-md-1">Sub total</th>
                </tr>
                @foreach($cart as $row)
                    <tr>
                        <td>{{ $row['name'] }}</td>
                        <td align="center">
                            <span role="button" data-op="minus" data-id="{{ $row['id'] }}" class="update-cart glyphicon glyphicon-minus-sign" value="-"></span>
                            <input type="text" value="{{ $row['quantity'] }}" size="1" class="text-center">
                            <span role="button" data-op="plus" data-id="{{ $row['id'] }}" class="update-cart glyphicon glyphicon-plus-sign" value="+"></span>
                        </td>
                        <td>{{ $row['price'] }}$</td>
                        <td>{{ $row['price'] * $row['quantity'] }}$</td>
                    </tr>
                @endforeach
                </tr>
            </table>
            <hr>
                <h3>Total: {{ Cart::getTotal() }}$</h3>

            <p><a href="{{ url('shop/order') }}" class="btn btn-primary" href="{{ url('shop/order-thanks') }}">Order now</a> <a class="btn btn-default" href="{{ url('shop/cart-clear') }}">Clear Cart</a></p>
        </div>

    @else

        <div class="col-md-12">
            <p><i>No items in the cart..</i></p>
        </div>

    @endif
    </div>

@endsection