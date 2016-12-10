@extends('cms.cms_master')

@section('cms_content')

    <h1 class="page-header">Are you sure you want to delete this user?</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ url('cms/user/' . $menu_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                {{ csrf_field() }}
                <a href="{{ url('cms/user') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

@endsection