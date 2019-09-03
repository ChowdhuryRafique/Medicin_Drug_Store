
@extends('BackEnd.AdminDashboard.master')
@section('admin')
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Company Add Dashboard</h1>
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
                    <!-- Company add-->
                    <form action="{{ route('update')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="com_id" value="{{$create->id}}">
                    <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Disease Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Name" value="{{$create->disease_name}}" name="disease_name">
                    </div>
                    
                </div>
                <div class="center" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    Back:<a href="index.html">Go to Dashboard</a></div>
                   
                    </form>
                     <!--End Company add-->
                </div>
            </div> <!-- .row -->
        </div> <!-- .buttons -->
    </div><!-- .animated -->
</div><!-- .content -->

@endsection