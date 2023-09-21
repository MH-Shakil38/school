@extends('admin.layouts.admin-master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('message-category.index')}}" style="float: right" class="btn btn-success">Category</a>
                    <h5>Add Message</h5>
                </div>
                <div class="card-body">
                    @if(isset($message))
                        <form action="{{route('messages.update',$message->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('messages.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Message Type</label>
                                                <select name="category_id" id="" class="form-control">
                                                    <option value="">Select Message Type</option>
                                                    @forelse(messageCategory() as $info)
                                                        <option value="{{$info->id}}" {{isset($message) && $message->category_id == $info->id ? 'selected' : '' }}>{{$info->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Image</label>
                                                <input type="file" name="image" id="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="title" id="" class="form-control" value="{{$message->title ?? old('title')}}">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
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
                            <th>image</th>
                            <th>Name</th>
                            <th>Message Type</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($messages as $info)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset($info->image)}}" width="80px" class="rounded-circle" height="80px" alt=""></td>
                                <td>{{$info->title ?? ''}}</td>
                                <td>{{$info->category->name ?? ''}}</td>
                                <td style="height: 100px !important;">{!! $info->details !!}</td>
                                <td>{{$info->status == 1 ? 'on' : 'off'}}</td>
                                <td>
                                    @if(isset($slider) && $slider->id == $info->id)
                                        <span class="badge bg-warning"> Updating...</span>
                                    @else
                                        <a href="{{route('messages.edit',$info->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i> </a>
                                        <form action="{{ route('messages.destroy', $info->id) }}" type="submit" method='post' >
                                            @csrf
                                            @method('delete')
                                            <button  type="submit" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </button>
                                        </form>
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


{{--    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rightModal">--}}
{{--        Open Right-Side Modal--}}
{{--    </button>--}}


{{--    <div class="modal fade" id="rightModal" tabindex="-1" role="dialog" aria-labelledby="rightModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-right" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <!-- Modal content goes here -->--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="rightModalLabel">Right-Side Modal</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <!-- Your modal content here -->--}}
{{--                    <p>This is a modal that opens from the right side of the screen.</p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <style>--}}
{{--        .modal-dialog-right {--}}
{{--            transform: translateX(200%);--}}
{{--            animation: slideInRight 2s forwards;--}}
{{--        }--}}

{{--        @keyframes slideInRight {--}}
{{--            to {--}}
{{--                transform: translateX(0);--}}
{{--            }--}}
{{--        }--}}
{{--        .modal-content{--}}
{{--            height: 100% !important;--}}
{{--        }--}}
{{--        .modal.show .modal-dialog {--}}
{{--            -webkit-transform: none;--}}
{{--            transform: none;--}}
{{--            height: 90%;--}}
{{--            float: right;--}}
{{--        }--}}

{{--    </style>--}}
@endsection
