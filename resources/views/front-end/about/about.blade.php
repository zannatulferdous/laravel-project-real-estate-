@extends('front-end.master')

@section('body')
@section('title')
    About Homeland
@endsection
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('/')}}/front/images/about.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
                    <div class="site-section-title">
                        <h2>Our Company</h2>
                    </div>
                    <p class="lead">With the number of companies increasing gradually,
                        various problems concerning the housing sector cropped up requiring early solution .
                        At this stage it was necessary to form a trade association of the Real Estate developers to protect the overall interests of the sector.
                        To strengthen the role of real estate sector Real Estate & Housing Association of Bangladesh
                        (Home Land) was formed with only 15 members in 2018. The objective of Home Land was to promote
                        formal private sector Real Estate Development in Bangladesh.</p>
{{--                    <p><a href="#" class="btn btn-outline-primary rounded-0 py-2 px-5">Read More</a></p>--}}
                </div>
            </div>
        </div>
    </div>


    {{--// end body--}}
    @include('front-end.includes.agent')
    @include('front-end.includes.choose')



@endsection
