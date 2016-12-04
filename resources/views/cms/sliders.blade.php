@extends('cms.cms_master')

@section('cms_content')
    <h1 class="page-header">Carousel</h1>
    <p>Here you can edit carousel sliders</p>

    <div class="row">
        <div class="col-md-12">
            <p><a class="btn btn-primary" href="{{ url('cms/sliders/create') }}">+ Add new slider</a></p>

            @if($sliders)

                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-2">Image</th>
                        <th class="col-md-2">Title</th>
                        <th class="col-md-7">Article</th>
                        <th class="col-md-1">Operation</th>
                    </tr>

                    @foreach($sliders as $slider)

                        <tr>
                            <td>{{ $slider['image'] }}</td>
                            <td>{{ $slider['title'] }}</td>
                            <td>{{ $slider['article'] }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('cms/sliders/' . $slider['id'] . '/edit') }}">Edit</a> |
                                <a href="{{ url('cms/sliders/' . $slider['id'] ) }}">Delete</a>
                            </td>
                        </tr>

                    @endforeach

                </table>

            @endif

        </div>
    </div>

@endsection