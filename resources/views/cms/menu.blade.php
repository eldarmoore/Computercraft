@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Menu</h1>
    <p>Here you can edit site menu</p>

    <div class="row">
        <div class="col-md-12">
            <p><a class="btn btn-primary" href="{{ url('cms/menu/create') }}">+ Add new menu</a></p>
            @if($menu)
                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-5">Link</th>
                        <th class="col-md-5">Url</th>
                        <th class="col-md-1">Last Update</th>
                        <th class="col-md-1">Operation</th>
                    </tr>
                    @foreach($menu as $row)

                        <?php

                        // $datetime is something like: 2014-01-31 13:05:59
                        $updated_at = $row['updated_at'];
                        $time = strtotime($updated_at);
                        $updated_at = date('d M Y', $time);
                        // $myFormatForView is something like: 01/31/14 1:05 PM

                        ?>

                        <tr>
                            <td>{{ $row['link'] }}</td>
                            <td><a target="_blank" href="{{ url( $row['url']) }}">{{ $row['url'] }}</a></td>
                            <td style="text-align: center">{{ $updated_at }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('cms/menu/' . $row['id'] . '/edit') }}">Edit</a> |
                                <a href="{{ url('cms/menu/' . $row['id']) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection