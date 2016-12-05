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

                    <?php

                    // $datetime is something like: 2014-01-31 13:05:59
                    $created_at = $row->created_at;
                    $time = strtotime($created_at);
                    $created_at = date('d-m-Y', $time);
                    // $myFormatForView is something like: 01/31/14 1:05 PM

                    ?>

                    <tr>
                        <td><div><b>{{ $row->name }}</b></div><div style="font-size: 0.8em;">{{ $created_at }}</div></td>
                        <td>
                            <?php $i = 0; ?>
                            @foreach( json_decode($row->data) as $item)
                                <li> <b>{{ ++$i }}</b> {{ $item->name }}, <span style="color: #2aabd2">quantity:</span> x {{ $item->quantity }}, <span style="color: #2aabd2">price:</span> {{ $item->price }}$ </li>
                            @endforeach
                        </td>
                        <td><span style="font-weight: 500">{{ $row->total }}$</span></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endif

@endsection