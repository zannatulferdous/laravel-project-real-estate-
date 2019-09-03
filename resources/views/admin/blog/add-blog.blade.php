@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    {{Form::open(['route'=>'new-blog','method'=>'post','class'=>'form-horizontal'])}}
                    <div class="card-body">
                        <h4 class="card-title">Add Blog</h4>
                        @if(Session::get('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @else
                        @endif

                        <div class="form-group row">
                            <label for="email1" class="col-sm-3 text-right control-label col-form-label">Blog Name</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="blog_name" id="email1" >
                                <span class="text-danger">{{$errors->has('blog_name')? $errors->first('blog_name'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Blog Description</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="blog_description"></textarea>
                                <span class="text-danger">{{$errors->has('blog_description')? $errors->first('blog_description'):''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                            <div class="col-sm-7">
                                <input  type="radio"  name="publication_status" value="1">Published
                                <input  type="radio"  name="publication_status" value="0">unpublished
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
