@extends('front-end.master')

@section('body')
@section('title')
    Contact Us
@endsection
    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-8 mb-5">


                    {{Form::open(['route'=>'new-contact','method'=>'post','class'=>'p-5 bg-white border'])}}
                    @if(Session::get('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @else
                    @endif
                        <div class="row form-group">
                            <div class="col-md-12 mb-3 mb-md-0">
                                <label class="font-weight-bold" for="fullname">Full Name</label>
                                <input type="text"  class="form-control"name="customer_full_name" placeholder="Full Name">
                                <span class="text-danger">{{$errors->has('customer_full_name')? $errors->first('customer_full_name'):''}}</span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email"  class="form-control" name="customer_email" placeholder="Email Address">
                                <span class="text-danger">{{$errors->has('customer_email')? $errors->first('customer_email'):''}}</span>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="email">Subject</label>
                                <input type="text"  class="form-control" name="customer_message_subject" placeholder="Enter Subject">
                                <span class="text-danger">{{$errors->has('customer_message_subject')? $errors->first('customer_message_subject'):''}}</span>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="message">Message</label>
                                <textarea class="form-control" name="customer_message" placeholder="Say hello to us"></textarea>
                                <span class="text-danger">{{$errors->has('customer_message')? $errors->first('customer_message'):''}}</span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
{{--                                <input type="submit" value="Send Message" name="btn" class="btn btn-primary  py-2 px-4 rounded-0">--}}
                                <button type="submit" value="Send Message" name="btn" class="btn btn-primary py-2 px-4 rounded-0">Submit</button>
                            </div>
                        </div>

                    {{Form::close()}}
                </div>

                <div class="col-lg-4">
                    <div class="p-4 mb-3 bg-white">
                        <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
                        <p class="mb-0 font-weight-bold">Address</p>
                        <p class="mb-4">203 river St. Mountain View, Dhanmondi, DHaka, Bangladesh</p>

                        <p class="mb-0 font-weight-bold">Phone</p>
                        <p class="mb-4"><a href="#">+880 6 28317590</a></p>

                        <p class="mb-0 font-weight-bold">Email Address</p>
                        <p class="mb-0"><a href="#">homeland@gmail.com</a></p>

                    </div>

                </div>
            </div>
        </div>
    </div>

    {{--// end body--}}

    @include('front-end.includes.agent')


@endsection
