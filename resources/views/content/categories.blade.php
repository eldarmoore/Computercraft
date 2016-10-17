@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Computercraft shop categories</h1>
        </div>
    </div>

    <div class="row">
        @foreach($categories as $row)
        <div class="col-md-4">
            <h2>{{ $row['title'] }}</h2>
            <p><img src="{{ asset('images/' . $row['image']) }}" alt="" border="0" width="250"></p>
        </div>
        @endforeach
    </div>
@endsection