@extends('layouts.front')

@section('title')
    Welcome to my shop
@endsection

@section('content')
    @include('layouts.inc.slider')
    
    <div class="py-5">>
        <div class="container">
            <div class="row">
                <h2>Featured Products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card ">
                                <img src="{{ asset('assets/uploads/products/'.$prod->image)}}"  alt="Product image">
                                <div class="card-body">
                                    <h5>{{$prod->name}}</h5>
                                    <Small class="float-start">{{$prod->selling_price}}</small>
                                    <Small class="float-end"><s>{{$prod->original_price}}</s></small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">>
        <div class="container">
            <div class="row">
                <h2>Trending category</h2>
                <div class="owl-carousel trending-carousel owl-theme">
                    @foreach ($trending_category as $trencate)
                        <div class="item">
                            <a href="{{ url('view-category/'.$trencate->slug)}}">
                                <div class="card ">
                                    <img src="{{ asset('assets/uploads/category/'.$trencate->image)}}"  alt="Category image">
                                    <div class="card-body">
                                        <h5>{{$trencate->name}}</h5>
                                        <p>
                                            {{ $trencate->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
    <script>
        $('.trending-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    </script>
@endsection
