@extends('front-end.master')

@section('body')

@section('title')
  Buy Properties
@endsection
    @include('front-end.includes.search')
    <div class="site-section site-section-sm bg-light">
        <div class="container">

            <div class="row mb-5">
                @foreach($properties as $property)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="property-entry h-100">
                            <a href="{{route('property-details',['id'=>$property->id])}}" class="property-thumbnail">
                                <div class="offer-type-wrap">
                                    <span class="offer-type bg-danger">Sale</span>
                                </div>
                                <img src="{{asset($property->property_image)}}" alt="Image" class="img-fluid">
                            </a>
                            <div class="p-4 property-body">
                                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                                <h2 class="property-title"><a href="{{route('property-details',['id'=>$property->id])}}">{{$property->property_name}}</a></h2>
                                <span class="property-location d-block mb-3"><span class="property-icon icon-room">
                                </span> {{$property->property_area}},{{$property->property_city}}</span>
                                <strong class="property-price text-primary mb-3 d-block text-success">TK. {{$property->property_price}}</strong>
                                <ul class="property-specs-wrap mb-3 mb-lg-0">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">{{$property->property_bedroom}} <sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">{{$property->property_bathroom}}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">SQ FT</span>
                                        <span class="property-specs-number">{{$property->square_feet}}</span>

                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            @include('front-end.includes.pagination')

        </div>
    </div>
    {{--// end body--}}

    @include('front-end.includes.choose')


@endsection
