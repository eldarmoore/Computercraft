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
                </tr>

                @foreach($orders as $row)
                    <tr>
                        <td><div><b>{{ $row->name }}</b></div><div style="font-size: 0.8em;">{{ $row->created_at }}</div></td>
                        <td>
                            <?php $i = 0; ?>
                            @foreach( json_decode($row->data) as $item)
                                <li> <b>{{ ++$i }}</b> {{ $item->name }}, <b>quantity:</b> x {{ $item->quantity }}, <b>price:</b> {{ $item->price }}$ </li>
                            @endforeach
                        </td>
                        <td style="text-align: center;"><b>{{ $row->total }}$</b></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endif

@endsection