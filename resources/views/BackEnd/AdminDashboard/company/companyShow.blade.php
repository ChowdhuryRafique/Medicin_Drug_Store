<div>
    @extends('BackEnd.AdminDashboard.master')
    @section('admin')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Company Show Dashboard</h1>
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
                      <th scope="col">Company Name</th>
                    </tr>
                    </thead>
                    @foreach($companyCreate as $company)
                    <tr>
                      <th scope="row">{{$company->id}}</th>
                      <td>{{$company->CompanyName}}</td>
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
</div>