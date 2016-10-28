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

{{--NEW SECTION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--}}

    {{--@if($cart)--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-12 col-md-12 col-lg-12">--}}
                {{--<table class="table table-hover">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>Product</th>--}}
                        {{--<th>Quantity</th>--}}
                        {{--<th class="text-center">Price</th>--}}
                        {{--<th class="text-center">Total</th>--}}
                        {{--<th> </th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--@foreach($cart as $row)--}}
                    {{--<tr>--}}
                        {{--<td class="col-sm-8 col-md-6">--}}
                            {{--<div class="media">--}}
                                {{--<a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ asset('/images/products/' . $row['name']) }}" style="width: 72px; height: 72px;"> </a>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading"><a href="#">{{ $row['name'] }}</a></h4>--}}
                                    {{--<span>Status: </span><span class="text-success"><strong>In Stock</strong></span>--}}
                                {{--</div>--}}
                            {{--</div></td>--}}
                        {{--<td class="col-sm-2 col-md-2" style="text-align: center">--}}


                            {{--<a href="" class="update-cart glyphicon glyphicon-minus-sign" data-op="minus" data-id="{{ $row['id'] }}" style="height: 25px;"></a>--}}
                            {{--<input type="text" value="{{ $row['quantity'] }}" size="1" class="text-center">--}}
                            {{--<a href="" class="update-cart glyphicon glyphicon-plus-sign" data-op="plus" data-id="{{ $row['id'] }}" style="height: 25px;"></a>--}}

                        {{--</td>--}}
                        {{--<td class="col-sm-1 col-md-1 text-center"><strong>{{ $row['price'] }}$</strong></td>--}}
                        {{--<td class="col-sm-1 col-md-1 text-center"><strong>{{ $row['price'] * $row['quantity'] }}$</strong></td>--}}
                        {{--<td class="col-sm-1 col-md-1">--}}
                            {{--<button type="button" class="btn btn-danger">--}}
                                {{--<span class="glyphicon glyphicon-remove"></span> Remove--}}
                            {{--</button></td>--}}
                    {{--</tr>--}}
                    {{--@endforeach--}}
                    {{--<tr>--}}
                        {{--<td>   </td>--}}
                        {{--<td>   </td>--}}
                        {{--<td>   </td>--}}
                        {{--<td><h3>Total</h3></td>--}}
                        {{--<td class="text-right"><h3><strong>{{ Cart::getTotal() }}$</strong></h3></td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<td>   </td>--}}
                        {{--<td>   </td>--}}
                        {{--<td>   </td>--}}
                        {{--<td>--}}
                            {{--<button type="button" class="btn btn-primary">--}}
                                {{--<span class="glyphicon glyphicon-shopping-cart"></span> Continue--}}
                            {{--</button></td>--}}
                        {{--<td>--}}
                            {{--<button type="button" class="btn btn-success">--}}
                                {{--Checkout <span class="glyphicon glyphicon-play"></span>--}}
                            {{--</button></td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--@endif--}}

@endsection