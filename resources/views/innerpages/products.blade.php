
<div class="dark_navigationbar">
@extends('index')
@section('title_and_meta')

@endsection
@section('content')
</div>

<section class="member_section_all">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                <div class="member_image" style="background-image: url({{ URL::to('/img/manjakos/' . $entity[0]['collections']['image_p'])}})"></div>
                <div class="member_text">
                    <h2 class="title_inner_big_news">{{ $entity[0]['collections']['name']['en'] }}</h2>
                    <h2 class="title_inner_big_news">{{ $entity[0]['collections']['type']['en'] }}</h2>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Details</h2>
                <div>{!! $entity[0]['collections']['other_details']['en'] !!}</div>
                <h2>Grams</h2>
                <div>{!! $entity[0]['collections']['gram']['en'] !!}</div>
                <h2>Barcode</h2>
                <div class="member_image" style="background-image: url({{ URL::to('/img/manjakos/' . $entity[0]['collections']['barcode_img'])}})"></div>
                <p class="title_inner_big_news">{{ $entity[0]['collections']['barcode']['en'] }}</p>
            </div>
        </div>
    </div>
</section>


@endsection
 