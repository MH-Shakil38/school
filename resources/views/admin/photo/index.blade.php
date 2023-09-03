@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Photo Gallery</h5>
                </div>
                <div class="card-body">
                    @if(isset($photo))
                        <form action="{{route('photo-galleries.update',$photo->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('photo-galleries.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="">Category <span class="text-danger">*</span></label>
                                                <select name="category_id" id="" class="form-control" required >
                                                    <option disabled selected>Select Type</option>
                                                    @forelse($categories as $info)
                                                        <option value="{{$info->id}}" {{isset($photo) && $photo->category_id == $info->id ? 'selected' : '' }}>{{$info->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                @error('category_id')
                                                <div class="text-danger">{{ $photo }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Image Title</label>
                                                <input type="text" name="title" id="" class="form-control" placeholder="Write post title">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Galllery Image <small>(image)</small></label>
                                                <input type="file" name="image" id="" class="form-control">
                                                @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
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
                    <h4>All photos</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                      @forelse($photos as $info)
                          <div class="col-md-2 col-lg-2 col-sm-12">
                              <div class="card">
                                      <img style="width: 100%;max-height: 120px;min-height: 120px" src="{{asset($info->image)}}" alt="">
                                  <div class="card-footer bg-gray">
                                      <a href="{{route('photo-galleries.edit',$info->id)}}" class="float-right  ml-2"><i class="fa fa-edit"></i></a>
                                      <a href="" class="text-danger float-right"><i class="fa fa-trash"></i></a>
                                  </div>
                              </div>
                          </div>
                      @empty
                      @endforelse
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection
