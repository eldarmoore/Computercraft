@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Edit this product -</h1>

    <div class="row">
        @if($categories)
            <div class="col-md-6">
            <form action="{{ url('cms/products/' . $product['id']) }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <div class="form-group">
                    <label for="categorie_id">Category:</label>
                    <select name="categorie_id" class="form-control" >

                    @foreach($categories as $row)
                        @if($row->sub_category > 0)
                            <option value="{{ $row->id }}">{{ $row->title }}</option>
                        @endif
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
                    <label for="sn">Serial Number:</label>
                    <input type="text" name="sn" value="{{ $product['sn'] }}" class="form-control" id="sn" placeholder="sn">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="text" name="quantity" value="{{ $product['quantity'] }}" class="form-control" id="quantity" placeholder="Quantity">
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
                    <label for="image[]">Change image:</label>
                    <div class="row">
                        <div>
                        <?php
                        $img = $product['image'];
                        $img = explode(",",$img);
                        $selected_picture = '';
                        ?>

                        @foreach($img as $key=>$i)

                            @if($i !== '')
                                <div style="height: 100px; width: 100px; margin: 2px;" class="pull-left">
                                    <input type="radio" class="radio" name="primary_image" id="{{ $key }}" value="{{ $i }}" <?php if($selected_picture == $key){echo("selected");}?> />
                                    <label for="{{ $key }}" class="label"><img src="{{ asset('images/products/' . $product['url'] . '/' . $i) }}" alt="" style="padding: 2px;max-height: 70px;max-width: 70px"></label>
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