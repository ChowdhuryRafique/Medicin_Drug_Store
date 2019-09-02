@extends('FontEnd.master')

@section('text')
 <!--    Start sliderarea area-->
@include('FontEnd.Index.slider')
  <!-- Start content -->
  @include('FontEnd.Index.content')
    <!-- Start search and upload part -->
    @include('FontEnd.Index.search')
    <!-- Start clint part -->
    <!-- Product -->
    @include('FontEnd.Index.productall')
    <!-- get in touch part_1 start -->
    @include('FontEnd.Index.touch')
@endsection