@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Add new product -</h1>

    <div class="row">
        @if($categories)
        <div class="col-md-6">
            <form action="{{ url('cms/products') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="categorie_id">Category:</label>
                    <?php $pick = Illuminate\Support\Facades\Input::old('categorie_id') ?>
                    <select name="categorie_id" class="form-control" >
                        <option value="">Choose Category...</option>
                        @foreach($categories as $row)
                            <option @if($pick == $row['id']) selected @endif value="{{ $row['id'] }}">{{ $row['title'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ Illuminate\Support\Facades\Input::old('title') }}" class="form-control my-source-field" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="url">Url:</label>
                    <input type="text" name="url" value="{{ Illuminate\Support\Facades\Input::old('url') }}" class="form-control my-target-field" id="url" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="sn">Serial Number:</label>
                    <input type="text" name="sn" value="{{ Illuminate\Support\Facades\Input::old('sn') }}" class="form-control" id="sn" placeholder="sn">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" name="quantity" value="{{ Illuminate\Support\Facades\Input::old('quantity') }}" class="form-control" id="quantity" placeholder="Quantity">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ Illuminate\Support\Facades\Input::old('article') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="price" name="price" value="{{ Illuminate\Support\Facades\Input::old('price') }}" class="form-control" id="url" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="image">Product image:</label>
                    <input type="file" name="image[]" multiple>
                </div>
                <a href="{{ url('cms/products') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary">Save products</button>
            </form>
        </div>
        @else
            <div class="col-md-12">
                <p>No category item <a href="{{ url('cms/categories/create') }}">Add category </a></p>
            </div>
        @endif
    </div>

@endsection