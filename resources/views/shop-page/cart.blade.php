
   @extends('shop-page.layouts.layouts')
   @section('cart','title')
   @section('content')

@foreach($glasse as $item)
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="glasses_box">
       <figure><img src="{{ asset('storage/images/'. $item->image)}}" alt="#"/></figure>
       <h3><span class="blu">$</span>{{$item->price}}</h3>
       <p>{{$item->type}}</p>
    </div>
 </div>
@endforeach

   @endsection
