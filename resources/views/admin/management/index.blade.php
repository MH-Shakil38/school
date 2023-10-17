@extends('admin.layouts.admin-master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">

                <a href="{{route('managements.index')}}" class="float-right btn btn-primary">Management Type</a>
                <h5>Management Create</h5>
            </div>
            <div class="card-body">
                @if(isset($management))
                <form action="{{route('managements.update',$management->id)}}" method="post"
                      enctype="multipart/form-data">
                    @method('PUT')
                    @else
                    <form action="{{route('managements.store')}}" method="post"
                          enctype="multipart/form-data">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"
                                       placeholder="Category Name"
                                       value="{{$management->name ?? old('name')}}">
                                @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control"
                                       placeholder="Category Name"
                                       value="{{$management->email ?? old('email')}}">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control"
                                       placeholder="Category Name"
                                       value="{{$management->phone ?? old('phone')}}">
                                @error('phone')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control"
                                       value="{{$management->image ?? old('image')}}">
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="d">Designation</label>
                                <select name="designation_id" id="" class="form-control">
                                    <option selected disabled>Select Designation</option>
                                    @forelse($categories as $info)
                                    <option {{isset($management) && $info->id == $management->id ? 'selected' : ''}} value="{{$info->id}}">{{$info->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @error('designation_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="status">Position</label>
                                <input type="number" name="position" class="form-control"
                                       value="{{$management->position ?? old('position')}}"
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
                                            value="1" {{isset($management) && $management->status == 1 ? 'selected' : ''}}>
                                            Show
                                        </option>
                                        <option
                                            value="0" {{isset($management) && $management->status == 0 ? 'selected' : ''}}>
                                            Hide
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                                  <textarea id="summernote" name="message">
                                                      {!!  $management->message ?? old('message')!!}
                                                    </textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                @if(isset($category))
                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                <a href="{{route('managements.index')}}"
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

                <h5>Management List</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Image</th>
                        <th>PositionM
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($managements as $info)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                        <td>{{$info->name}}</td>
                        <td>{{$info->email}}</td>
                        <td>{{$info->phone}}</td>
                        <td><img src="{{asset($info->image)}}" width="80" alt=""></td>
                        <td>{{$info->position ?? ''}}</td>
                        <td>
                            @if(isset($category) && $category->id == $info->id)
                            <span class="badge bg-warning"> Updating...</span>
                            @else
                            <a href="{{route('managements.edit',$info->id)}}" class="btn btn-info"> <i
                                    class="fa fa-edit"></i> </a>
                            <a href="#" class="btn btn-danger">
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
