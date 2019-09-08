@extends('BackEnd.AdminDashboard.master')
@section('admin')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Quantity Dashboard</h1>
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
                    <!-- Quantity show-->
                    <table class="table table-bordered table-responsive{-sm|-md|-lg|-xl}">
              <thead>
              <tbody>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Medicine Name</th>
                  <th scope="col">Medicine Quantity</th>
                  <th scope="col">Medicine Price</th>
                  <th scope="col">Medicine Description(Optional)</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Disease Name:</th>
                  <th scope="col">Image Upload</th>
                  <th scope="col">Delete</th>
                  <th scope="col">Edit</th>
                </tr>
                </thead>
                @foreach($medicinCreate as $medicine)
                <tr>
                  <th scope="row">{{$medicine->id}}</th>
                  <td>{{$medicine->medicinName}}</td>
                  <td>{{$medicine->medicinQuantity}}</td>
                  <td>{{$medicine->medicinPrice}}</td>
                  
                  
                 <td> <a type="submit" class="btn btn-warning" href="{{url('delete')}}/{{$medicine->id}}">Delete</a></td>
                 <td> <a type="submit" class="btn btn-primary" href="{{url('Edit')}}/{{$medicine->id}}" >Edit</a></td>
                 
                </tr>
                @endforeach
              </tbody>
            </table>
                    <!--End Quantity show-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .buttons -->
    </div><!-- .animated -->
</div><!-- .content -->


@endsection



