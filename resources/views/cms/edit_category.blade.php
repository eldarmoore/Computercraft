@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Edit this category -</h1>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ url('cms/categories/' . $category['id']) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="category_id" value="{{ $category['id'] }}">
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
                    <input type="text" name="title" value="{{ $category['title'] }}" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="url">Url:</label>
                    <input type="text" name="url" value="{{ $category['url'] }}" class="form-control my-target-field" id="url" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ $category['article'] }}</textarea>
                </div>
                <div class="form-group">
                    <img src="{{ asset('images/' . $category['image']) }}" width="50" border="0" alt="">
                    <label for="image">Category image:</label>
                    <input type="file" name="image">
                </div>
                <a href="{{ url('cms/categories') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save category</button>
            </form>
        </div>
    </div>

@endsection