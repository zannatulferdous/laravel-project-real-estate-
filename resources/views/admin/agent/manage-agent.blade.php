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
                        <h5 class="card-title">Manage Agent</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Agent Name</th>
                                    <th>Agent Designation</th>
                                    <th>Agent Description</th>
                                    <th>Agent Image</th>
                                    <th>publication status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($agents as $agent)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$agent->agent_name}}</td>
                                        <td>{{$agent->agent_designation}}</td>
                                        <td>{{$agent->agent_description}}</td>
                                        <td><img src="{{asset($agent->agent_image)}}" height="70">
                                        </td>
                                        <td>{{$agent->publication_status==1?'Published':'Unpublished'}}</td>
                                        <td>
                                            @if($agent->publication_status==1)
                                                <a href="{{route('unpublished-agent',['id'=>$agent->id])}}" class="btn btn-primary">
                                                    <span><i class="fa fa-arrow-up"></i></span>
                                                </a>
                                            @else
                                                <a href="{{route('published-agent',['id'=>$agent->id])}}" class="btn btn-warning">
                                                    <span><i class="fa fa-arrow-down"></i></span>
                                                </a>
                                            @endif
                                            <a href="{{route('edit-agent',['id'=>$agent->id])}}" class="btn btn-success">
                                                <span><i class="fa fa-edit"></i></span>
                                            </a>
                                            <a href="{{route('delete-agent',['id'=>$agent->id])}}" class="btn btn-danger">
                                                <span><i class="fa fa-trash"></i></span>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SI No.</th>
                                    <th>Agent Name</th>
                                    <th>Agent Designation</th>
                                    <th>Agent Description</th>
                                    <th>Agent Image</th>
                                    <th>publication status</th>
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
