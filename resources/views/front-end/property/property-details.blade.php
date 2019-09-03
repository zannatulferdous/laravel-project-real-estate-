@extends('front-end.master')

@section('body')

    <div class="site-section site-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div>
                        <div class="col-md-12">
                            <div><img src="{{asset($propertyDetails->property_image)}}" alt="Image"  style=" height:500px;width: 100%" ></div>
                        </div>
                    </div>
                    <div class="bg-white property-body border-bottom border-left border-right">
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <strong class="text-success h1 mb-3">TK.{{$propertyDetails->property_price}}</strong>
                            </div>
                            <div class="col-md-6">
                                <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                    <li>
                                        <span class="property-specs">Beds</span>
                                        <span class="property-specs-number">{{$propertyDetails->property_bedroom}}<sup>+</sup></span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Baths</span>
                                        <span class="property-specs-number">{{$propertyDetails->property_bathroom}}</span>

                                    </li>
                                    <li>
                                        <span class="property-specs">Balconies</span>
                                        <span class="property-specs-number">{{$propertyDetails->property_balcony}}</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                                <strong class="d-block">{{$propertyDetails->property_type}}</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">Place</span>
                                <strong class="d-block">{{$propertyDetails->property_area}},{{$propertyDetails->property_city}}</strong>
                            </div>
                            <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                                <span class="d-inline-block text-black mb-0 caption-text">SQ FT</span>
                                <strong class="d-block">{{$propertyDetails->square_feet}}</strong>
                            </div>
                        </div>
                        <h2 class="h4 text-black">More Info</h2>
                        <p>{{$propertyDetails->short_description}}</p>
                        <p>{!!$propertyDetails->long_description!!}</p>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="bg-white widget border rounded">

                        <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                        <form action="" class="form-contact-agent">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                            </div>
                        </form>
                    </div>

                    <div class="bg-white widget border rounded">
                        <h3 class="h4 text-black widget-title mb-3">HomeLAnd</h3>
                        <p>The company has been focused since the 2017 acquisition on converting the
                            well-known 19-year-old legacy website to a modern, cloud hosted,
                            and mobile-first website that will perform like a lightening quick world class portal.</p>
                    </div>

                </div>

            </div>
        </div>
    </div>


@endsection
