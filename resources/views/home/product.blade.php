@extends('home.layout')
         
@section('product')

    @include('home.blog')

      <section>
         <form action="/">
            <div class="relative border-2 border-gray-100 m-4 rounded-lg">
              {{-- <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
              </div> --}}
              <input type="text" name="search" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Ships..." />
              <div class="absolute top-2 right-2">
                <button type="submit" class="btn btn-primary">
                  Search
                </button>
              </div>
            </div>
          </form>
      </section>
      
      <!-- product section -->
      <section class="product_section layout_padding" id="product-section">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Ships</span>
               </h2>
            </div>
            <div class="row">
               @foreach($products as $product)
                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="/ships/{{ $product->id }}" class="option1">
                              Details
                              </a>
                              <a href="" class="option2">
                              Buy Now
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }} Image">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{$product->title}}
                           </h5>
                           <h6>
                              ${{$product->price}}
                           </h6>
                        </div>
                     </div>
                  </div>
               @endforeach

            {{-- <div class="btn-box">
               <a href="">
               View All products
               </a>
            </div> --}}
         </div>
      </section>
      <!-- end product section -->

      @include('home.contact')

@endsection