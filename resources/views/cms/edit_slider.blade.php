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
                    <input type="text" name="title" value="{{ $slider['title'] }}" class="form-control my-source-field" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ $slider['article'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" name="link" value="{{ $slider['link'] }}" class="form-control my-target-field" id="link" placeholder="Link">
                </div>
                <div class="form-group">
                    <label for="image[]">Change image:</label>
                    <div class="row">
                        <div>
                        <?php
                        $img = $slider['image'];
                        $img = explode(",",$img);
                        $selected_picture = '';
                        ?>

                        @foreach($img as $key=>$i)

                            @if($i !== '')
                                <div style="height: 100px; width: 100px; margin: 2px;" class="pull-left">
                                    <input type="radio" class="radio" name="primary_image" id="{{ $key }}" value="{{ $i }}" <?php if($selected_picture == $key){echo("selected");}?> />
                                    <label for="{{ $key }}" class="label"><img src="{{ asset('images/sliders/' . $slider['link'] . '/' . $i) }}" alt="" style="padding: 2px;max-height: 70px;max-width: 70px"></label>
                                </div>
                            @endif

                        @endforeach
                    </div>

                    <div class="col-md-12">
                        <hr>

                        <input type="file" name="image[]" multiple>
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