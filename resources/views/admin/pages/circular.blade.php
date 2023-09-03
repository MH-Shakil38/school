@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">

                    {{--                    <a href="{{route('circular.index')}}" class="float-right btn btn-primary">{{isset($circular) ? 'Up'}}circular List</a>--}}
                    <h5>Home circular</h5>
                </div>
                <div class="card-body">
                    @if(isset($circular))
                        <form action="{{route('circulars.update',$circular->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('circulars.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12">
                                            <label for="status">circular File <small>(pdf)</small></label>
                                            <input type="file" name="file" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="status">Title</label>
                                            <input type="text" name="title" value="{{$circular->title ?? old('circular')}}" class="form-control" placeholder="Enter a circular Title">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Type</label>
                                                <select name="type" id="" class="form-control">
                                                    <option value="1" {{isset($circular) && $circular->type == 1 ? 'selected' : ''}}>Circular</option>
                                                    <option value="0" {{isset($circular) && $circular->type == 0 ? 'selected' : ''}}>Circular-Result</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="1" {{isset($circular) && $circular->status == 1 ? 'selected' : ''}}>Active</option>
                                                    <option value="0" {{isset($circular) && $circular->status == 0 ? 'selected' : ''}}>De-Active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            @if(isset($circular))
                                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                                <a href="{{route('circulars.index')}}" class="btn btn-danger w-100"> Cancel</a>
                                            @else
                                                <button class="btn btn-primary w-100">Submit</button>
                                            @endif

                                        </div>
                                    </div>
                                </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(isset($circular))
                        <a href="{{route('circulars.edit',$circular->id)}}" class="float-right btn btn-primary">Update</a>
                    @else
                        <a href="{{route('circulars.create')}}" class="float-right btn btn-primary">Create</a>
                    @endif
                    <h5>Home circular</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>circular File</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($circulars as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->type == 1 ? 'Circular' : 'Result'}}</td>

                                <td>{{$info->title}}</td>
                                <td>
                                    <div class="icon">
{{--                                        <a href="http://ccpc.edu.bd/notice-board/sikshk-niyog-bijngpti-agst-2023" target="_blank">--}}
                                        <a href="{{asset($info->file)}}" target="_blank">
                                            <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    @if(isset($circular) && $circular->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('circulars.edit',$info->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                        <a href="{{route('circulars.edit',$info->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
