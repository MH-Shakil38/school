@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">

                    {{--                    <a href="{{route('video.index')}}" class="float-right btn btn-primary">{{isset($video) ? 'Up'}}video List</a>--}}
                    <h5>Video Gallery</h5>
                </div>
                <div class="card-body">
                    @if(isset($video))
                        <form action="{{route('video-galleries.update',$video->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('video-galleries.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="category_id" id="" class="form-control">
                                                    <option selected disabled>Select a video category</option>
                                                    @forelse($categories as $info)
                                                        <option value="{{$info->id}}" {{isset($video) && $video->category_id == $info->id ? 'selected' : ''}}>{{$info->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="status">Vide Id <small>(Youtube Id)</small></label>
                                            <input type="text"
                                                   name="video_id"
                                                   class="form-control"
                                                   required
                                                   placeholder="Enter a Title"
                                                   value="{{$video->title ?? old('title')}}">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="status">Vide Title</label>
                                            <input type="text"
                                                   name="title"
                                                   class="form-control"
                                                   required
                                                   placeholder="Enter a Title"
                                                   value="{{$video->title ?? old('title')}}">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($video) && $video->status == 1 ? 'selected' : ''}}>
                                                        Active
                                                    </option>
                                                    <option
                                                        value="0" {{isset($video) && $video->status == 0 ? 'selected' : ''}}>
                                                        De-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            @if(isset($video))
                                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                                <a href="{{route('video-galleries.index')}}" class="btn btn-danger w-100">
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
                    @if(isset($video))
                        <a href="{{route('video-galleries.edit',$video->id)}}"
                           class="float-right btn btn-primary">Updating...</a>
                    @else
                        <a href="{{route('video-galleries.index')}}" class="float-right btn btn-primary">List</a>
                    @endif
                    <h5>Video Gallery</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Video Id</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($videos as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->category->name ?? ''}}</td>
                                <td>{{$info->title}}</td>
                                <td class="">{{$info->video_id}}</td>
                                <td>
                                    <a href="https://www.youtube.com/watch?v={{$info->video_id}}" target="_blank" class="btn btn-success"><i class="fa fa-video"></i></a>
                                    @if(isset($video) && $video->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('video-galleries.edit',$info->id)}}" class="btn btn-info"> <i
                                                class="fa fa-edit"></i> </a>
                                        <a href="{{route('video-galleries.edit',$info->id)}}" class="btn btn-danger"> <i
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
