@extends('shop-page.layouts.layouts')
@section('title','glasses')
@section('content')
        <!-- Our  Glasses section -->
        <div class="glasses">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2>Our Glasses</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor
                           e et dolore magna aliqua. Ut enim ad minim veniam, qui
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container-fluid">
               <div class="row">
                @foreach ($data as $item)


                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="glasses_box">
                        <figure><img src="{{ asset('storage/images/'. $item->image)}}" alt="#"/></figure>
                        <h3><span class="blu">$</span>{{$item->price}}</h3>
                        <p>{{$item->type}}</p>
                        @include('shop-page.layouts.addCartForm')
                     </div>
                  </div>
                  @endforeach

                  {{-- <div class="col-md-12">
                     <a class="read_more" href="#">Read More</a>
                  </div> --}}
               </div>
            </div>
         </div>
         <!-- end Our  Glasses section -->

      @endsection
