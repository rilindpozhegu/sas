@extends('index')
@section('title_and_meta')

@endsection
@section('content')
					
@include('includes.slider_all')


<div class="container table_holder_main">
        <div >
            <h2><h4><%uesers['collections']['name']['en']%></h4></h2>
        </div>



        <table id="example" class=" example table table-striped table-bordered table_general" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>User Details</th>
                <th>Location</th>
                <th>Order Date</th>
                <th>Order Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="uesers in includes.global.many[0]['user-details']">
                <td><%uesers['collections']['name']['en']%></td>
                <td><%uesers['collections']['surname']['en']%></td>
                <td><div ng-bind-html="uesers['collections']['details']['en']"></div></td>
                <td><%uesers['collections']['location']['en']%></td>
                <td><%uesers.collections.order_date |  moment: 'format': 'MMM DD, YYYY'%></td>
                <td><div ng-bind-html="uesers['collections']['order_type']['en']"></div></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>User Details</th>
                <th>Location</th>
                <th>Order Date</th>
                <th>Order Detail</th>
            </tr>
        </tfoot>
    </table>
</div>

                    

@endsection