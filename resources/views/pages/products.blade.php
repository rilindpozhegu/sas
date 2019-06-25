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
                <th>Type</th>
                <th>Grams</th>
                <th>Other Details</th>
                <th>Production Date</th>
                <th>Expire Detail</th>
                <th>Barcode</th>
            </tr>
        </thead>
        <tbody>
            <tr ng-repeat="uesers in includes.global.many[1]['products']">
                <td><%uesers['collections']['name']['en']%></td>
                <td><%uesers['collections']['type']['en']%></td>
                <td><%uesers['collections']['gram']['en']%></td>
                <td><div ng-bind-html="uesers['collections']['other_details']['en']"></div></td>
                <td><%uesers.collections.production_date |  moment: 'format': 'MMM DD, YYYY'%></td>
                <td><%uesers.collections.expiration_date |  moment: 'format': 'MMM DD, YYYY'%></td>
                <td><%uesers['collections']['barcode']['en']%></td>
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
                <th>Barcode</th>
            </tr>
        </tfoot>
    </table>
</div>

                    

@endsection