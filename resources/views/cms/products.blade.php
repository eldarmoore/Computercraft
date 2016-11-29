@extends('cms.cms_master')

@section('cms_content')
    <h1 class="page-header">Product</h1>
    <p>Here you can edit site products</p>

    <div class="row">
        <div class="col-md-12">
            <p><a class="btn btn-primary" href="{{ url('cms/products/create') }}">+ Add new product</a></p>
            @if($products)
                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-9">Title</th>
                        <th class="col-md-1" style="text-align: center">Quantity</th>
                        <th class="col-md-1" style="text-align: center">Last Update</th>
                        <th class="col-md-1" style="font-size: 0.9em; text-align: center">Operation</th>
                    </tr>
                    @foreach($products as $row)

                        <?php

                        // $datetime is something like: 2014-01-31 13:05:59
                        $updated_at = $row['updated_at'];
                        $time = strtotime($updated_at);
                        $updated_at = date('d M Y', $time);
                        // $myFormatForView is something like: 01/31/14 1:05 PM

                        ?>

                        <tr>
                            <td>{{ $row['title'] }}</td>
                            <td style="text-align: center">{{ $row['quantity'] }}</td>
                            <td>{{ $updated_at }}</td>
                            <td>
                                <a href="{{ url('cms/products/' . $row['id'] . '/edit') }}">Edit</a> |
                                <a href="{{ url('cms/products/' . $row['id']) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection