@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Add new category -</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/categories') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="sub_category">Sub Category:</label>
                    <select class="form-control" name="sub_category" >
                        <option value="">Choose main category...</option>
                        @foreach($categories as $cat)
                            @if($cat['sub_category'] == 0)
                                <option value="{{ $cat['id'] }}">{{ $cat['title'] }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ Illuminate\Support\Facades\Input::old('title') }}" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="url">Url:</label>
                    <input type="text" name="url" value="{{ Illuminate\Support\Facades\Input::old('url') }}" class="form-control my-target-field" id="url" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ Illuminate\Support\Facades\Input::old('article') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Category image:</label>
                    <input type="file" name="image">
                </div>
                <a href="{{ url('cms/categories') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save category</button>
            </form>
        </div>
    </div>

@endsection