@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>{{$categories[0]->category->bn_name}}</h5>
                </div>
                <div class="card-body">
                    @if(isset($message))
                        <form action="{{route('posts.update',$message->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        @if(isset($message))
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($message) && $message->status == 1 ? 'selected' : ''}}>
                                                        Active
                                                    </option>
                                                    <option
                                                        value="0" {{isset($message) && $message->status == 0 ? 'selected' : ''}}>
                                                        De-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="col-md-{{isset($message)? 2:3}}">
                                            <div class="form-group">
                                                <label for="">Type <span class="text-danger">*</span></label>
                                                <select name="category_id" id="" class="form-control" required >
                                                    <option disabled selected>Select Type</option>
                                                    @forelse($categories as $info)
                                                        <option value="{{$info->id}}" {{isset($message) && $message->category_id == $info->id ? 'selected' : '' }}>{{$info->bn_name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                @error('category_id')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="title" id="" class="form-control" required placeholder="Write post title">
                                                @error('title')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">File <small>(pdf/image)</small></label>
                                                <input type="file" name="file" id="" class="form-control">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Details</label>
                                                  <textarea id="summernote" name="details">
                                                      {!!  $message->details ?? old('details')!!}
                                                    </textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary w-100">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Menu Name</th>
                            <th>Title</th>
                            <th>Text Details</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($posts as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->category->bn_name}}</td>
                                <td>{{$info->title ?? ''}}</td>
                                <td class="text-center">
                                    @if(isset($info->details))
                                        <a class="btn btn-primary" href=""><i class="fa fa-file-word"></i></a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(isset($info->file))
                                    <a class="btn btn-danger" href=""><i class="fa fa-file-pdf"></i></a>
                                    @endif
                                </td>
                                <td class="text-center"><a href="" class="btn {{$info->status == 1 ? 'btn-success' : 'btn-danger'}}"><i class="fa fa-power-off fa-toggle-on"></i></a></td>
                                <td>
                                    @if(isset($slider) && $slider->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('posts.edit',$info->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                        <a href="{{route('posts.edit',$info->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
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
