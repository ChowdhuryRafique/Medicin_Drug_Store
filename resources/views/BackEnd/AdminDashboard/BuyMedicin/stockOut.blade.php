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
                
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                              
                                    <!-- All Order show-->
                                    <table class="table table-bordered table-responsive{-sm|-md|-lg|-xl}">
                              <thead>
                              <tbody>
                                <tr>
                                  <th scope="col">Id</th>
                                  <th scope="col">Medicine Name</th>
                                  <th scope="col">Medicine Quantity</th>
                                  <th scope="col">Medicine Price</th>
                                
                                  <th scope="col">Add Medicine</th>
                                  <th scope="col">Action</th>
                                </tr>
                                </thead>
                                @foreach($medicinCreate as $medicine)
                                <tr>
                                  <th scope="row">{{$medicine->id}}</th>
                                  <td>{{$medicine->medicinName}}</td>
                                  <td>{{$medicine->medicinQuantity}}</td>
                                  <td>{{$medicine->medicinPrice}}</td>
                                  
                                  <td>  <span class="name"><input type="text" name="" id="{{$medicine->id}}"> </span> </td>
                
                                      <td>  <span class="name"><button type="submit" name="button" class="btn btn-warning add_button" value="{{$medicine->id}}">Add</button></span> </td>
                                 
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                                    <!--End Order show-->
                                </div>
                            </div> <!-- .row -->
                        </div> <!-- .buttons -->
                    </div><!-- .animated -->
                </div><!-- .content -->

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
      $('.add_button').click(function(){
       var idicca = $(this).val();
       var quantity = $('#'+idicca).val();
      // var price_from_table = $(this).closest('tr').find('.price_from_table').html();
       if(quantity==''){
         alert("Kiccu Nai!!");
       }
       else{
         var link = '/admin/all/order/buy/'+idicca+'/'+quantity;
         window.location.href = link;
       }
      });
    });
</script>
@endsection


