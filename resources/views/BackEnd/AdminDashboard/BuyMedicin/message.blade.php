
@extends('BackEnd.AdminDashboard.master')
@section('admin')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Disease Show Dashboard</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="content">
        <div class="animated fadeIn">
            <div class="buttons">
    
                <!-- Left Block -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <!-- Company Show-->
         <table class="table table-bordered table-responsive{-sm|-md|-lg|-xl}">
                  <thead>
                  <tbody>
                    <tr>
                      <th scope="col">Serials</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Complain</th>
                    </tr>
                    </thead>
                    @foreach($message as $contform)
                    <tr>
                      <th scope="row">{{$contform->id}}</th>
                      <td>{{$contform->name}}</td>
                      <td>{{$contform->email}}</td>
                      <td>{{$contform->phone}}</td>
                      <td>{{$contform->message}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                        <!--End Company Show-->
                    </div>
                </div> <!-- .row -->
            </div> <!-- .buttons -->
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection