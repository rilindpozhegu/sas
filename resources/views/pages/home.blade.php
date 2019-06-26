@extends('index')
@section('title_and_meta')

@endsection
@section('content')

@include('includes.slider_all')

<div class="container main_body">test
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://asia.ifoam.bio/wp-content/uploads/2018/12/avatar__181424.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Clients</h5>
                <p class="card-text">Know more about your clients, Identity details and orders, for more click the button below.</p>
                <a href="/clients" class="btn btn-primary">View Clients</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/05/15/21/58/drug-icon-2316244_960_720.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Products</h5>
                <p class="card-text">Pill details, for more <br>click the button <br>below.<br></p>
                <a href="/products" class="btn btn-primary">View Products</a>
            </div>
        </div>
    </div>
</div>

@endsection