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
                        <th>Title</th>
                        <th>Last Update</th>
                        <th>Operation</th>
                    </tr>
                    @foreach($products as $row)
                        <tr>
                            <td>{{ $row['title'] }}</td>
                            <td>{{ $row['updated_at'] }}</td>
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