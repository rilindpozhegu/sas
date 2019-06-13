@extends('index')
@section('title_and_meta')

@endsection
@section('content')
					
<div ng-repeat="uesers in includes.global.many[0]['user-details']">
    <h2><h4><%uesers['collections']['name']['en']%></h4></h2>
</div>

                    

@endsection