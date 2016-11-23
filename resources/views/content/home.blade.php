@extends('master')

@section('slider')

    <?php

    $products = [];

    if(!empty($_GET['search'])){

        $user_search = filter_var( trim($_GET['search']), FILTER_SANITIZE_STRING);

        if($user_search){

            $db = new PDO('mysql:host=localhost;dbname=computercraft;charset=utf8', 'root', 'root');
            $sql = "SELECT * FROM products WHERE title LIKE ? OR article LIKE ?";
            $query = $db->prepare($sql);
            $query->setFetchMode(PDO::FETCH_OBJ);
            $query->execute( ["%$user_search%", "%$user_search%"] );
            $result = $query->fetchAll();
            $products = (count($result) > 0) ? $result : false;

        }

    }

    ?>

    <div class="carousel slide carousel-example-generic" data-ride="carousel" id="featured">
        <div class="form-group-search" style="margin: 0 auto;">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="get" autocomplete="off" class="input-group">
                        <input type="text" name="search" id="search-input" class="form-control search" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button type="submit" name="submit" class="btn btn-default" type="button">Search</button>
                        </span>
                    </form>
                    <div class="search-result"></div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div>
        <div class="carousel-inner">
            <div class="item active"><video controls muted autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/crystal_hero2.mp4') }}"></video></div>
            <div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/fans_hero3.mp4') }}"></video></div>
            <div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/VENGENCE_LED_5MB.mp4') }}"></video></div>
            <div class="item "><video autoplay="" loop="" preload="" poster="http://cwsmgmt.corsair.com/responsive/img/cue_fallback.jpg" id="videoHero" style="top: 70px; height: auto; width: 100%;" src="{{ asset('videos/RGBFAN.mp4') }}"></video></div>
        </div>{{-- carousel-inner --}}

        <a class="left carousel-control" href="#featured" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#featured" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- featured carousel -->

@section('content')

    <h3>My page header demo</h3>
    <p>Demo text for page article</p>

    <div class="product-result">

        <?php if( is_array($products) && count($products) > 0): ?>
        <hr>
        <?php foreach($products as $row): ?>

        <h4><?= $row->title; ?></h4>
        <p><?= $row->body; ?></p>

        <?php endforeach; ?>

        <?php else: ?>

        <?php if($products === false): ?>
        <hr>
        <p>No result...</p>
        <?php endif; ?>

        <?php endif; ?>

    </div>


@endsection