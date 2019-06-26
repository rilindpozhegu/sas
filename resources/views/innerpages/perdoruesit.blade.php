@extends('index')
@section('title_and_meta')


<div class="contact_header">
@endsection
@section('content')
</div>
<div class="member_header">
</div>



<section class="member_section_all">
    <div class="container">
        <div class="row">
            <div class="col-md-4">  
                <div class="member_image" style="background-image: url({{ URL::to('/img/manjakos/' . $entity[0]['collections']['image'])}})"></div>
                <div class="member_text">
                    <h2 class="title_inner_big_news">{{ $entity[0]['collections']['name']['en'] }}</h2>
                    <h2 class="title_inner_big_news">{{ $entity[0]['collections']['surname']['en'] }}</h2>
                </div>
            </div>
            <div class="col-md-8">
                <h2>Personal Details</h2>
                <div>{!! $entity[0]['collections']['details']['en'] !!}</div>
                <h2>Order Type</h2>
                <div>{!! $entity[0]['collections']['order_type']['en'] !!}</div>
            </div>
        </div>
    </div>
</section>


@endsection