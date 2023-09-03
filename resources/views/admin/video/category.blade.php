@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">

                    {{--                    <a href="{{route('category.index')}}" class="float-right btn btn-primary">{{isset($category) ? 'Up'}}category List</a>--}}
                    <h5>Menu category</h5>
                </div>
                <div class="card-body">
                    @if(isset($category))
                        <form action="{{route('video-categories.update',$category->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('video-categories.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="status">Name</label>
                                            <input type="text" name="name" class="form-control" required
                                                   placeholder="Enter a category Name" value="{{$category->name ?? old('name')}}">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($category) && $category->status == 1 ? 'selected' : ''}}>
                                                        Active
                                                    </option>
                                                    <option
                                                        value="0" {{isset($category) && $category->status == 0 ? 'selected' : ''}}>
                                                        De-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            @if(isset($category))
                                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                                <a href="{{route('video-categories.index')}}" class="btn btn-danger w-100">
                                                    Cancel</a>
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
                    @if(isset($category))
                        <a href="{{route('video-categories.edit',$category->id)}}"
                           class="float-right btn btn-primary">Updating...</a>
                    @else
                        <a href="{{route('video-categories.index')}}" class="float-right btn btn-primary">List</a>
                    @endif
                    <h5>Menu category</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($categories as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->name}}</td>
                                <td>
                                    @if(isset($category) && $category->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('video-categories.edit',$info->id)}}" class="btn btn-info"> <i
                                                class="fa fa-edit"></i> </a>
                                        <a href="{{route('video-categories.edit',$info->id)}}" class="btn btn-danger"> <i
                                                class="fa fa-trash"></i> </a>
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
