 @extends('BackEnd.AdminDashboard.master')
@section('admin')

<div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1>Stock Out Dashboard</h1>
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Stock Out Datatables Tables:</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">20</option><option value="50">30</option><option value="100">50</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example" class="table table-striped table-bordered border-t0 text-nowrap w-100 dataTable no-footer" role="grid" aria-describedby="example_info">
                                                <thead>
                                                    <tr role="row"><th class="wd-5p sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Serial: activate to sort column descending" style="width: 77px;">Serial</th><th class="wd-10p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Medicine Name: activate to sort column ascending" style="width: 171px;">Medicine Name</th><th class="wd-10p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Medicine Quantity: activate to sort column ascending" style="width: 198px;">Medicine Quantity</th><th class="wd-5p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="input: activate to sort column ascending" style="width: 229px;">Input Medicin</th><th class="wd-5p sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Add: activate to sort column ascending" style="width: 108px;">Add Medicin</th></tr>
                                                </thead>
                                                <tbody>



                                                    <tr role="row" class="odd">
                                                        <td class="serial sorting_1">1.</td>


                                                        <td>  <span class="name">Napa</span> </td>
                                                        <td>  <span class="name">4</span> </td>
                                                        <td>  <span class="name"><input type="text" name="" id="9"> </span> </td>
                                                        <td>  <span class="name"><button type="submit" name="button" class="btn btn-warning add_button" value="9">Add</button></span> </td>
                                                    </tr></tbody>
                                                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="example_next"><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- .row -->
                    </div> <!-- .buttons -->
                </div><!-- .animated -->
            </div><!-- .content -->
@endsection


