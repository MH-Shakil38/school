@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">

{{--                    <a href="{{route('slider.index')}}" class="float-right btn btn-primary">{{isset($slider) ? 'Up'}}Slider List</a>--}}
                    <h5>Home slider</h5>
                </div>
                <div class="card-body">
                    @if(isset($slider))
                        <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                    @else
                        <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <label for="status">Slider Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label for="status">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter a Slider Title">
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="1" {{isset($slider) && $slider->status == 1 ? 'selected' : ''}}>Active</option>
                                        <option value="0" {{isset($slider) && $slider->status == 0 ? 'selected' : ''}}>De-Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                @if(isset($slider))
                                    <button class="btn btn-primary w-100 mb-2">Submit</button>
                                    <a href="{{route('slider.index')}}" class="btn btn-danger w-100"> Cancel</a>
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
                    @if(isset($slider))
                        <a href="{{route('slider.edit',$slider->id)}}" class="float-right btn btn-primary">Update</a>
                    @else
                        <a href="{{route('slider.create')}}" class="float-right btn btn-primary">Create</a>
                    @endif
                    <h5>Home slider</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Slider Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($sliders as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->title}}</td>
                                <td><img src="{{asset($info->image)}}" height="80px" width="120px" alt=""></td>
                                <td>
                                    @if(isset($slider) && $slider->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('slider.edit',$info->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                        <a href="{{route('slider.edit',$info->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
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
