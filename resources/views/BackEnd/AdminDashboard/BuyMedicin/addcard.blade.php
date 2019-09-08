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
                    
              <table class="table " id="example">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th>Medicine Name</th>
                    <th>Medicine Quantity</th>
                    <th>input</th>


                  </tr>
                </thead>
                <tbody>

                  @php
                   $a = 1;
                   @endphp
                   @php
                   $order_total = 0;
                   @endphp
                   @foreach($carts as $cart)
                   <tr>
                     <td>{{$a}}</td>
                     <td><span class="name">{{ $cart->cart->medicinName }}</span></td>
                     <td><span class="name">{{$cart->cart->medicinPrice}} <font>X {{$cart->medicine_quantity}}</font></span></td>
                     <td><span class="name">{{$cart->cart->medicinPrice*$cart->medicine_quantity}}</span></td>
                      @php
                      $order_total = $order_total+$cart->cart->medicinPrice*$cart->medicine_quantity;
                      @endphp
                   </tr>
                   @php
                   $a++;;
                   @endphp


                     @endforeach

                </tbody>
              </table>
                    <!--End Restore Company show-->
                </div>
                <div class="col-md-3 offset-md-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               Total Order Prize
             </li>
          </div>
          <div class="col-md-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
               {{$order_total}}
             </li>
          </div>
          <div class="col-md-6 offset-md-3
           mt-3">
            <li class="d-flex justify-content-between align-items-center">

               <form  action="{{route('order_all')}}" method="post">
                 {{csrf_field()}}
                  @foreach($carts as $cart)
                 <input type="hidden" name="order_medicine_name" value="{{ $cart->cart->medicine_name }}">
                 <input type="hidden" name="order_medicine_quantity" value="{{ $cart->medicine_quantity }}">
                 <input type="hidden" name="total_order_medicine_price" value="{{$cart->cart->medicine_price*$cart->medicine_quantity}}">
                  @endforeach
                 <input type="hidden" value="{{$order_total}}"  name="order_all">
                  <button type="submit" class="btn btn-info">order</button>
               </form>
             </li>
          </div>
            </div> <!-- .row -->
        </div> <!-- .buttons -->
    </div><!-- .animated -->
</div><!-- .content -->


@endsection
