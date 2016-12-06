@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Add new menu -</h1>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ url('cms/menu') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="menu">Menu name:</label>
                    <input type="text" name="menu" value="{{ Illuminate\Support\Facades\Input::old('menu') }}" class="form-control my-source-field" id="menu" placeholder="Menu">
                </div>
                <div class="form-group">
                    <label for="url">Url:</label>
                    <input type="text" name="url" value="{{ Illuminate\Support\Facades\Input::old('url') }}" class="form-control my-target-field" id="url" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ Illuminate\Support\Facades\Input::old('title') }}" class="form-control" id="title" placeholder="Title">
                </div>
                <a href="{{ url('cms/menu') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save menu</button>
            </form>
        </div>
    </div>

@endsection