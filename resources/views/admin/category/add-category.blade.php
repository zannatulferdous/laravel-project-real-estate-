@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{route('new-category')}}" method="post">
                       @csrf
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
{{--                            <h4 style="color: green" class="text-center text success">{{Session::get('message')}}</h4>--}}
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
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">category Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="Category_name" id="email1" placeholder="category">
                                    <span class="text-danger">{{$errors->has('Category_name')? $errors->first('Category_name'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="category_description"></textarea>
                                    <span class="text-danger">{{$errors->has('category_description')? $errors->first('category_description'):''}}</span>
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
                    </form>
                </div>

            </div>

        </div>
        <!-- editor -->
    </div>

@endsection