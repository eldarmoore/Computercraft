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
                        <th>Link</th>
                        <th>Url</th>
                        <th>Last Update</th>
                        <th>Operation</th>
                    </tr>
                    @foreach($menu as $row)
                        <tr>
                            <td>{{ $row['link'] }}</td>
                            <td><a target="_blank" href="{{ url( $row['url']) }}">{{ $row['url'] }}</a></td>
                            <td>{{ $row['updated_at'] }}</td>
                            <td>
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