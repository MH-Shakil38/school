@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Role Create</h5>
                </div>
                <div class="card-body">
                    @if(isset($role))
                        <form action="{{route('categories.update',$role->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Parent Category Id</label>
                                                <select name="category_id" id="" class="form-control">
                                                    <option value=""> Select Parent Category</option>
                                                    @forelse($roles as $info)
                                                        <option value="{{$info->id}}" {{session()->get('cat') ==$info->id ? 'selected' :  (isset($role) && $role->category_id == $info->id ? 'selected' : '')}}>
                                                            {{$info->bn_name}}
                                                        </option>
                                                    @empty
                                                    @endforelse

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="status">Name <smap>(bangla)</smap></label>
                                            <input type="text" name="bn_name" class="form-control"
                                                   placeholder="Enter a category Name" value="{{$role->bn_name ?? old('bn_name')}}">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="status">Name <smap>(En)</smap></label>
                                            <input type="text" name="en_name" class="form-control" value="{{$role->en_name ?? old('en_name')}}"
                                                   placeholder="category Name (English)">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="status">Position</label>
                                            <input type="text" name="position" class="form-control" value="{{$role->position ?? old('position')}}"
                                                   placeholder="Enter Menu Position">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($role) && $role->status == 1 ? 'selected' : ''}}>
                                                        Active
                                                    </option>
                                                    <option
                                                        value="0" {{isset($role) && $role->status == 0 ? 'selected' : ''}}>
                                                        De-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="is_show_nav">Show Top Menu</label>
                                                <select name="is_show_nav" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($role) && $role->is_show_nav == 1 ? 'selected' : ''}}>
                                                        Show
                                                    </option>
                                                    <option
                                                        value="0" {{isset($role) && $role->is_show_nav == 0 ? 'selected' : ''}}>
                                                        Hide
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-2">
                                            <label for="status">category Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                        <div class="col-md-12">
                                            @if(isset($role))
                                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                                <a href="{{route('categories.index')}}" class="btn btn-danger w-100">
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

                    <h5>Roles</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Parent Menu</th>
                            <th>Position</th>
                            <th>Show Top Menu</th>
                            {{--                            <th>M Image</th>--}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($roles as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->bn_name}}</td>
                                <td>{{$info->category->bn_name ?? ''}}</td>
                                <td>{{$info->position ?? ''}}</td>
                                <td>{{$info->is_show_nav == 1 ? 'Yes' : 'No'}}</td>
                                {{--                                <td><img src="{{asset($info->image)}}" height="80px" width="120px" alt=""></td>--}}
                                <td>
                                    @if(isset($role) && $role->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('categories.edit',$info->id)}}" class="btn btn-info"> <i
                                                class="fa fa-edit"></i> </a>
                                        <a href="{{route('categories.edit',$info->id)}}" class="btn btn-danger"> <i
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
