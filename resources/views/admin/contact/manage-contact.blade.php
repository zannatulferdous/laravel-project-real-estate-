@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">


                <div class="card">
                    <div class="card-body">
                        @if(Session::get('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                        @endif
                        <h5 class="card-title">Manage Contact</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$contact->customer_full_name}}</td>
                                        <td>{{$contact->customer_email}}</td>
                                        <td>{{$contact->customer_message_subject}}</td>
                                        <td>{{$contact->customer_message}}</td>
                                        <td>
                                            <a href="{{route('delete-contact',['id'=>$contact->id])}}" class="btn btn-danger">
                                                <span><i class="fa fa-trash"></i></span>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection