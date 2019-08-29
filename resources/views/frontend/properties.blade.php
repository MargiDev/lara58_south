@extends('layouts.frontend_layouts.main')

@section('content')

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(/img/frontend_img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Listings</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    @include('layouts.frontend_layouts.advance_search')
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->
    <section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-100">
                        <div class="view-area d-flex align-items-center">
                            <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Order by:</span>
                            <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
              @foreach( $props as $prop )
                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="/img/frontend_img/bg-img/{{ $prop->image }}" alt="{{ $prop->image }}">

                            <div class="tag">
                                <span>
                                  @if($prop->objection == 0)
                                    For Sale
                                  @else
                                    For Rent
                                  @endif
                                </span>
                            </div>
                            <div class="list-price">
                                <p>${{ $prop->price }}</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>{{ $prop->name }}</h5>
                            <p class="location"><img src="/img/frontend_img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <?php $excerpt = substr($prop->excerpt, 0, 100). '...'; ?>
                            <p>{{ $excerpt }}</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="/img/frontend_img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="/img/frontend_img/icons/bathtub.png" alt="">
                                    <span>{{ $prop->bathroom }}</span>
                                </div>
                                <div class="garage">
                                    <img src="/img/frontend_img/icons/garage.png" alt="">
                                    <span>{{ $prop->bedroom }}</span>
                                </div>
                                <div class="space">
                                    <img src="/img/frontend_img/icons/space.png" alt="">
                                    <span>{{ $prop->size }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="south-pagination d-flex justify-content-end">
                        {{-- {{ $props->links('vendor.pagination.property_list') }} --}}
                        {{ $props->links('vendor.pagination.my_paginate') }}
                        {{-- {{ $props->onEachSide(3)->links() }} --}}


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Listing Content Wrapper Area End ##### -->

@endsection
