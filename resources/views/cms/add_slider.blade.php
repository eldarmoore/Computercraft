@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Add new slider -</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('cms/sliders') }}" method="post" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ Illuminate\Support\Facades\Input::old('title') }}" class="form-control my-source-field" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ Illuminate\Support\Facades\Input::old('article') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="button">Button:</label>
                    <input type="text" name="button" value="{{ Illuminate\Support\Facades\Input::old('button') }}" class="form-control" id="button" placeholder="Button">
                </div>
                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" name="link" value="{{ Illuminate\Support\Facades\Input::old('link') }}" class="form-control" id="link" placeholder="Link">
                </div>
                <div class="form-group">
                    <label for="image">Slider image:</label>
                    <input type="file" name="image">
                </div>
                <a href="{{ url('cms/sliders') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save slider</button>

            </form>
        </div>
    </div>

@endsection