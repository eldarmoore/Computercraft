@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Orders</h1>

    @if($orders)
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th class="col-md-2">User</th>
                    <th class="col-md-9">Order details</th>
                    <th class="col-md-1">Total</th>
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
                                <li>{{ $item->quantity }} x {{ $item->name }}, <span style="background-color: #2aabd2; color: #FFFFFF; padding: 3px;">{{ $item->price }}$</span>  </li>
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