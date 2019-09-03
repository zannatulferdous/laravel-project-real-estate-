@extends('admin.master')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{route('update-category')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Edit Category</h4>
                            <h4 style="color: green" class="text-center text success">{{Session::get('message')}}</h4>

                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right control-label col-form-label">category Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="Category_name" value="{{$category->Category_name}}" id="email1">
                                    <input type="hidden" class="form-control" name="id" value="{{$category->id}}" id="email1">
                                    <span class="text-danger">{{$errors->has('Category_name')? $errors->first('Category_name'):''}}</span>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Category Description</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="category_description" >{{$category->category_description}}</textarea>
                                    <span class="text-danger">{{$errors->has('category_description')? $errors->first('category_description'):''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label ">Publication Status</label>
                                <div class="col-sm-7">
                                    <input  type="radio"  name="publication_status" value="1" {{$category->publication_status==1?'checked':''}}>Published
                                    <input  type="radio"  name="publication_status" value="0" {{$category->publication_status==0?'checked':''}}>unpublished
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