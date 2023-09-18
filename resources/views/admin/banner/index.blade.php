@extends('admin.layouts.admin-master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <a href="{{route('banners.index')}}" class="float-right btn btn-primary">Banners Type</a>
                <h5>Banners Create</h5>
            </div>
            <div class="card-body">
                @if(isset($banner))
                <form action="{{route('banners.update',$banner->id)}}" method="post"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @else
                    <form action="{{route('banners.store')}}" method="post"
                          enctype="multipart/form-data">
                        @endif
                        @csrf
                        <div class="row">

                            <div class="col-md-4">
                                <label for="heading">Banner Heading</label>
                                <input type="text" name="heading" class="form-control"
                                       placeholder="Banner heading"
                                       value="{{$banner->heading ?? old('heading')}}">
                                @error('heading')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-8">
                                <label for="title">Banner Title</label>
                                <input type="text" name="title" class="form-control"
                                       placeholder="Banner title"
                                       value="{{$banner->title ?? old('title')}}">
                                @error('title')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control"
                                       value="{{$banner->image ?? old('image')}}">
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>




                            <div class="col-md-4">
                                <label for="status">Position</label>
                                <input type="number" name="position" class="form-control"
                                       value="{{$banner->position ?? old('position')}}"
                                       placeholder="Category Position">
                                @error('position')
                                <span class="text-danger"></span>
                                @enderror
                            </div>



                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="is_show_nav">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option
                                            value="1" {{isset($banner) && $banner->status == 1 ? 'selected' : ''}}>
                                            Show
                                        </option>
                                        <option
                                            value="0" {{isset($banner) && $banner->status == 0 ? 'selected' : ''}}>
                                            Hide
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                                  <textarea id="summernote" name="details">
                                                      {!!  $banner->details ?? old('message')!!}
                                                    </textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                @if(isset($banner))
                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                <a href="{{route('banners.index')}}"
                                   class="btn btn-danger w-100">
                                    Cancel</a>
                                @else
                                <button class="btn btn-primary w-100">Submit</button>
                                @endif

                            </div>


                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <h5>Banners List</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Status</th>
                        <th>Heading</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($banners as $info)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                        <td>{{$info->heading}}</td>
                        <td>{{$info->title}}</td>
                        <td><img src="{{asset($info->image)}}" width="230" height="130" alt=""></td>
                        <td>{{$info->position ?? ''}}</td>
                        <td>
                            @if(isset($banner) && $banner->id == $info->id)
                            <span class="badge bg-warning"> Updating...</span>
                            @else
                            <a href="{{route('banners.edit',$info->id)}}" class="btn btn-info"> <i
                                    class="fa fa-edit"></i> </a>
                            <a href="{{route('banners.edit',$info->id)}}" class="btn btn-danger">
                                <i
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
