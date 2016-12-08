@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Content</h1>
    <p>Here you can edit site content</p>

    <div class="row">
        <div class="col-md-12">
            <p><a class="btn btn-primary" href="{{ url('cms/content/create') }}">+ Add new content</a></p>
            @if($content)
                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-8">Title</th>
                        <th class="col-md-2">Last Update</th>
                        <th class="col-md-2">Operation</th>
                    </tr>
                    @foreach($content as $row)
                        <tr>
                            <td>{{ $row['title'] }}</td>
                            <td style="text-align: center">{{ $row['updated_at'] }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('cms/content/' . $row['id'] . '/edit') }}">Edit</a> |
                                <a href="{{ url('cms/content/' . $row['id']) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection