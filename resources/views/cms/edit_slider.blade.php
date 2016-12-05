@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Edit this slider -</h1>

    <div class="row">
        @if($slider)
        <div class="col-md-6">
            <form action="{{ url('cms/sliders/' . $slider['id']) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="slider_id" value="{{ $slider['id'] }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ $slider['title'] }}" class="form-control" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ $slider['article'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="button">Button:</label>
                    <input type="text" name="button" value="{{ $slider['button'] }}" class="form-control" id="button" placeholder="Button">
                </div>
                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" name="link" value="{{ $slider['link'] }}" class="form-control" id="link" placeholder="Link">
                </div>
                <div class="form-group">
                    <label for="image">Slider image:</label>
                    <div class="row">
                        <div class="container">
                            @if($slider['image'])
                                <div>
                                    <img src="{{ asset('images/carousel/' . $slider['image']) }}" alt="">
                                </div>
                            @endif
                        </div>
                    </div>
                    <label for="image" style="margin-top: 20px;">Change image:</label>
                    <div>
                        <input type="file" name="image">
                    </div>
                </div>
                    <br>
                <a href="{{ url('cms/sliders') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save slider</button>
            </form>
        </div>
        @else
            <div class="col-md-12">
                <p>No category item <a href="{{ url('cms/categories/create') }}">Add category </a></p>
            </div>
        @endif
    </div>

@endsection