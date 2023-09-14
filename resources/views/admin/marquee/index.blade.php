@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">

                    {{--                    <a href="{{route('category.index')}}" class="float-right btn btn-primary">{{isset($marquee) ? 'Up'}}category List</a>--}}
                    <h5>Management Type</h5>
                </div>
                <div class="card-body">
                    @if(isset($notice))
                        <form action="{{route('marquees.update',$notice->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('marquees.store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="status">Title</label>
                                            <input type="text" name="title" class="form-control"
                                                   placeholder="Enter Breaking title"
                                                   value="{{$notice->title ?? old('title')}}">
                                            @error('title')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="status">Select Notice</label>
                                            <select name="notice_id" id="" class="form-control">
                                                <option selected disabled>Select Notice</option>
                                                @forelse($notices as $info)
                                                    <option value="{{$info->id}}" {{ isset($notice) && $notice->id == $info->id ? 'selected':''}}>{{$info->title ?? $info->file}} ({{$info->created_at}})</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @error('notice_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>


                                        <div class="col-md-12">
                                            <label for="status">Position</label>
                                            <input type="number" name="position" class="form-control"
                                                   value="{{$notice->position ?? old('position')}}"
                                                   placeholder="Category Position">
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="is_show_nav">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option
                                                        value="1" {{isset($notice) && $notice->status == 1 ? 'selected' : ''}}>
                                                        Show
                                                    </option>
                                                    <option
                                                        value="0" {{isset($notice) && $notice->status == 0 ? 'selected' : ''}}>
                                                        Hide
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            @if(isset($marquee))
                                                <button class="btn btn-primary w-100 mb-2">Submit</button>
                                                <a href="{{route('marquees.index')}}"
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('managements.index')}}" class="float-right btn btn-primary">Management List</a>
                    <h5>Management Type</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Word</th>
                            <th>pdf</th>
                            <th>Position</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($marquees as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>{{$info->title ?? $info->notice->title}}</td>
                                <td class="text-center">
                                    @if(isset($info->notice->details))
                                        <a class="btn btn-primary" href=""><i class="fa fa-file-word"></i></a>
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if(isset($info->notice->file))
                                        <a class="btn btn-danger" href=""><i class="fa fa-file-pdf"></i></a>
                                    @endif
                                </td>
                                <td>{{$info->position ?? ''}}</td>
                                <td>
                                    @if(isset($marquee) && $marquee->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('marquees.edit',$info->id)}}" class="btn btn-info"> <i
                                                class="fa fa-edit"></i> </a>
                                        <a href="{{route('marquees.edit',$info->id)}}" class="btn btn-danger">
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
