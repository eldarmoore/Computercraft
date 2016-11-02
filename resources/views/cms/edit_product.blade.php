@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Edit this product -</h1>

    <div class="row">
        @if($categories)
        <div class="col-md-6">
            <form action="{{ url('cms/products/' . $product['id']) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="categorie_id">Category:</label>
                    <select name="categorie_id" class="form-control" >
                        @foreach($categories as $row)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{ $product['title'] }}" class="form-control my-source-field" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="url">Url:</label>
                    <input type="text" name="url" value="{{ $product['url'] }}" class="form-control my-target-field" id="url" placeholder="Url">
                </div>
                <div class="form-group">
                    <label for="article">Article:</label>
                    <textarea name="article" id="summernote" class="form-control" col="30" rows="10">{{ $product['article'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="price" name="price" value="{{ $product['price'] }}" class="form-control" id="url" placeholder="Price">
                </div>
                <div class="form-group">
                    <img src="{{ asset('images/products' . $product['image']) }}" width="80" border="0" alt="">
                    <label for="image">Change image:</label>
                    <input type="file" name="image">
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