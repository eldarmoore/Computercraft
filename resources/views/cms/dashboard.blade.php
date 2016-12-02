@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Dashboard</h1>

    <div class="row">
        <div class="col-md-12">

            @if($carousel)

                <table class="table table-bordered">
                    <tr>
                        <th class="col-md-2">Image</th>
                        <th class="col-md-2">Title</th>
                        <th class="col-md-7">Article</th>
                        <th class="col-md-1">Operation</th>
                    </tr>

                    @foreach($carousel as $slider)

                        <tr>
                            <td>{{ $slider->image }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->article }}</td>
                            <td style="text-align: center">
                                <a href="{{ url('cms/carousel/' . $slider->id . '/edit') }}">Edit</a> |
                                <a href="{{ url('cms/carousel/' . $slider->id ) }}">Delete</a>
                            </td>
                        </tr>

                    @endforeach

                </table>

            @endif

        </div>
    </div>

@endsection