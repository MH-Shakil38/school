@extends('admin.layouts.admin-master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
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
                                                <input type="text" name="title" id="" class="form-control">
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
                                        <a href="{{route('messages.edit',$info->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
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
