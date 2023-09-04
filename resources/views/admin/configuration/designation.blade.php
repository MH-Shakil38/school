@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Religion</h5>
                </div>
                <div class="card-body">
                    @if(isset($designation))
                        <form action="{{route('designations.update',$designation->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('designations.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="status">Name</label>
                                            <input type="text" name="name" class="form-control" required
                                                   placeholder="Enter a category Name" value="{{$designation->name ?? old('name')}}">
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($designation) && $designation->status == 1 ? 'selected' : ''}}>
                                                        Active
                                                    </option>
                                                    <option
                                                        value="0" {{isset($designation) && $designation->status == 0 ? 'selected' : ''}}>
                                                        De-Active
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            @if(isset($designation))
                                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                                <a href="{{route('designations.index')}}" class="btn btn-danger w-100">
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
                    @if(isset($designation))
                        <a href="{{route('designations.edit',$designation->id)}}"
                           class="float-right btn btn-primary">Updating...</a>
                    @else
                        <a href="{{route('designations.index')}}" class="float-right btn btn-primary">List</a>
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
                        @forelse($designations as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->name}}</td>
                                <td>
                                    @if(isset($designation) && $designation->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('designations.edit',$info->id)}}" class="btn btn-info"> <i
                                                class="fa fa-edit"></i> </a>
                                        <a href="{{route('designations.edit',$info->id)}}" class="btn btn-danger"> <i
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
