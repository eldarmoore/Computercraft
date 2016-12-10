@extends('cms.cms_master')

@section('cms_content')
    <h1 class="page-header">Users page</h1>

    <div class="row">
        <div class="col-md-12">
            <p><a class="btn btn-primary" href="{{ url('cms/users/create') }}">+ Add new user</a></p>
            @if($users)
                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-4" style="text-align: center">Name</th>
                        <th class="col-md-4" style="text-align: center">Email:</th>
                        <th class="col-md-2" style="text-align: center">Last Update</th>
                        <th class="col-md-2" style="text-align: center">Operation</th>
                    </tr>
                    @foreach($users as $row)

                        <?php

                        // $datetime is something like: 2014-01-31 13:05:59
                        $updated_at = $row['updated_at'];
                        $time = strtotime($updated_at);
                        $updated_at = date('d M Y', $time);
                        // $myFormatForView is something like: 01/31/14 1:05 PM

                        ?>


                        <tr>
                            <td>{{ $row['name'] }}</td>
                            <td>{{ $row['email'] }}</td>
                            <td style="text-align: center">{{ $updated_at }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('cms/user/' . $row['id'] . '/edit') }}">Edit</a> |
                                <a href="{{ url('cms/user/' . $row['id']) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection