
@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                        <h4 class="card-title">Edit Agent</h4>
                        {{Form::open(['route'=>'update-agent','method'=>'post','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editPropertyForm'])}}

                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Agent Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="agent_name" id="email1" value="{{$agent->agent_name}}">
                                <input type="hidden" class="form-control" name="id" id="email1" value="{{$agent->id}}">
                                <span class="text-danger">{{$errors->has('agent_name')? $errors->first('agent_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Agent Designation</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="agent_designation" id="email1" value="{{$agent->agent_designation}}">
                                <span class="text-danger">{{$errors->has('agent_designation')? $errors->first('agent_designation'):''}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Short Description</label>
                            <div class="col-sm-7">
                                <textarea rows="2" class="form-control"name="agent_description" >{{$agent->agent_description}}</textarea>
                                <span class="text-danger">{{$errors->has('agent_description')? $errors->first('agent_description'):''}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Agent Image</label>
                            <div class="col-sm-7">
                                <input type="file" class="form-control" name="agent_image" value="{{$agent->agent_image}}">
                                <img src="{{asset($agent->agent_image)}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                            <div class="col-sm-7">
                                <input  type="radio"  name="publication_status" value="1" {{$agent->publication_status==1?'checked':''}}>Published
                                <input  type="radio"  name="publication_status" value="0" {{$agent->publication_status==0?'checked':''}}>unpublished
                                <br>
                                <span class="text-danger">{{$errors->has('publication_status')? $errors->first('publication_status'):''}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit"  name="btn" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {{Form::close()}}
                </div>

            </div>

        </div>
        <!-- editor -->
    </div>
@endsection
