@extends('BackEnd.AdminDashboard.master')
@section('admin')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Restore Company Dashboard</h1>
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
                    <!-- All Restore Company show-->
                    <h1>Table add</h1>
                    <table class="table table-bordered table-responsive{-sm|-md|-lg|-xl}">
                            <thead>
                            <tbody>
                              <tr>
                                <th scope="col">Serials</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Action</th>
          
                              </tr>
                              </thead>
                              @foreach($companyCreate as $company)
                              <tr>
                                <th scope="row">{{$company->id}}</th>
                                <td>{{$company->companyName}}</td>
                                <td> <a type="submit" class="btn btn-warning" href="{{url('company/restore')}}/{{$company->id}}">Restore</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    <!--End Restore Company show-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .buttons -->
    </div><!-- .animated -->
</div><!-- .content -->


@endsection
