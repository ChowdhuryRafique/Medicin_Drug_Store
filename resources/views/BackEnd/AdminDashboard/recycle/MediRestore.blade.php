
@extends('BackEnd.AdminDashboard.master')
 @section('admin')

 <div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Restore Medicins Dashboard</h1>
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
                                    <th scope="col">Action</th>
                                  </tr>
                                  </thead>
                                  @foreach($medicinCreate as $medicine)
                                  <tr>
                                    <th scope="row">{{$medicine->id}}</th>
                                    <td>{{$medicine->medicinName}}</td>
                                    <td>{{$medicine->medicinQuantity}}</td>
                                    <td>{{$medicine->medicinPrice}}</td>
                                    <td>{{$medicine->medicinDescription}}</td>
                                    <td>{{$medicine->medicinSelect}}</td>
                                    <td>{{$medicine->diseaseName}}</td>
                                    <td><img src="{{asset('/storage')}}/{{$medicine->imageupload}}" alt="image" /></td>
                                   <td> <a type="submit" class="btn btn-warning" href="{{url('admin/recycle/medicine/restore')}}/{{$medicine->id}}">Restore</a></td>
                                                                 
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                                              
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
                    <!-- All Restore Medicin show-->
                    <h1>Table add</h1>
                    <!--End Medicin show-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .buttons -->
    </div><!-- .animated -->
</div><!-- .content -->

<div class="clearfix"></div>

@endsection
