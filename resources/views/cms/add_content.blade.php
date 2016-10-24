@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Add new content -</h1>

    <div class="row">
        <div class="col-md-4">
            <form action="{{ url('cms/content') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ Illuminate\Support\Facades\Input::old('title') }}" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea id="summernote" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <a href="{{ url('cms/content') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save content</button>
            </form>
        </div>
    </div>

@endsection