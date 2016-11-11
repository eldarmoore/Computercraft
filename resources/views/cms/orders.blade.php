@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Orders</h1>

    @if($orders)
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th width="150">User</th>
                    <th>Order details</th>
                    <th>Total</th>
                    <th>Date</th>
                </tr>

                @foreach($orders as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>
                            @foreach( json_decode($row->data) as $item)
                                <li> {{ $item->name }}, quantity: x {{ $item->quantity }}, price: {{ $item->price }}$ </li>
                            @endforeach
                        </td>
                        <td>{{ $row->total }}$</td>
                        <td style="font-size: 0.8em; width: 120px;">{{ $row->created_at }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endif

@endsection