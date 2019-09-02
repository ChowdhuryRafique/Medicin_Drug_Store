<div>
    <div>
        <div>
            @extends('BackEnd.AdminDashboard.master')
            @section('admin')
            
            <div class="breadcrumbs">
                            <div class="breadcrumbs-inner">
                                <div class="row m-0">
                                    <div class="col-sm-4">
                                        <div class="page-header float-left">
                                            <div class="page-title">
                                                <h1>Medicins Add Dashboard</h1>
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
            <!-- Medicin add-->
            <div class="MedicinAdd">
            <form action="{{ route('update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group row">
                <input type="hidden" name="medicine_id" value="{{$create->id}}">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Medicine Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Type Name" placeholder="Enter Name" name="medicinName" value="{{$create->medicinName}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Medicine Quantity:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Type Name" placeholder="Enter Quantity" name="medicinQuantity" value="{{$create->medicinQuantity}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Medicine Price:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Type Name" placeholder="Enter Price" name="medicinPrice" value="{{$create->medicinPrice}}">
                    </div>
                </div>




                
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Medicine Description(Optional):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Type Name" placeholder="Write Description" name="medicinDescription" value="{{$create->medicinDescription}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Company Name
                        :</label>
                    <div class="col-sm-10">
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="medicinSelect" value="{{$create->medicinSelect}}">
                            <option selected>Choose One</option>
                            <option value="1">Square Ltd.</option>
                            <option value="2">Aci Ltd.</option>
                            <option value="3">One Pharma Ltd.</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Disease Name:
            
                        </label>
                    <div class="col-sm-10">
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="diseaseName" value="{{$create->diseaseName}}">
                            <option selected>Choose One</option>
                            <option value="1">Fever</option>
                            <option value="2">Napa</option>
                            <option value="3">Napa Extra</option>
                            <option value="3">Histasin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image Upload:</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="Type Name" placeholder="Upload Image" name="imageupload" value="{{$create->imageupload}}">
                    </div>
                </div>
                <div class="center" style="text-align: center">
                    <button type="submit" class="btn btn-primary">Register</button>
                    Back:<a href="index.html">Go to Dashboard</a></div>
            </form>
            
            </div>
            <!--End Medicin add-->
                                        </div>
                                    </div> <!-- .row -->
                                </div> <!-- .buttons -->
                            </div><!-- .animated -->
                        </div><!-- .content -->
            
            
            @endsection
                        
        </div>
    </div>
</div>