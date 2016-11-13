@extends('cms.cms_master')

@section('cms_content')
    <h1 class="page-header">Users</h1>
    <p>Here you can edit site users</p>

    <div class="row">
        <div class="col-md-12">
            <p><a class="btn btn-primary" href="{{ url('cms/users/create') }}">+ Add new user</a></p>
            @if($users)
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email:</th>
                        <th>Last Update</th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>
                    @foreach($users as $row)
                        <tr>
                            <td>{{ $row['name'] }}</td>
                            <td>{{ $row['email'] }}</td>
                            <td>{{ $row['updated_at'] }}</td>
                            <td></td>
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