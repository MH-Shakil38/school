@extends('admin.layouts.admin-master')

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="{{route('settings.index')}}" class="float-right btn btn-primary">Setting</a>
            <h5>Website Settings</h5>
        </div>
        <div class="card-body">
            @if(isset($setting))
                <form action="{{route('settings.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
            @else
                <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
            @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">School Name <small>(Bangla)</small></label>
                            <input type="text" name="bn_name" class="form-control"
                                   placeholder="Your School Bangla name" value="{{$setting->bn_name ?? old('bn_name')}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">School Name <small>(English)</small></label>
                            <input type="text" name="en_name" class="form-control"
                                   placeholder="Your School Bangla name" value="{{$setting->en_name ?? old('en_name')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Your School email" value="{{$setting->email ?? old('email')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="School phone" value="{{$setting->phone ?? old('phone')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Establish</label>
                            <input type="date" name="establish" class="form-control"
                                   placeholder="School establish Date" value="{{$setting->establish ?? old('establish')}}">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">EIIN</label>
                            <input type="text" name="eiin" class="form-control" placeholder="Your School EIIN" value="{{$setting->eiin ?? old('eiin')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Institute Code</label>
                            <input type="text" name="code" class="form-control"
                                   placeholder="Your School institute Code" value="{{$setting->code ?? old('code')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Logo</label>
                            <input type="file" name="logo" class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Map Link</label>
                            <input type="text" name="map" class="form-control" value="{{$setting->map ?? old('map')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Facebook</label>
                            <input type="text" name="facebook" class="form-control" value="{{$setting->facebook ?? old('facebook')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Youtube</label>
                            <input type="text" name="youtube" class="form-control" value="{{$setting->youtube ?? old('youtube')}}">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Full Address</label>
                            <textarea name="full_address" id="" cols="30" rows="1" class="form-control"
                                      placeholder="Enter School Full Address">{{$setting->full_address ?? old('full_address')}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                              <textarea id="summernote">
                                  {!!  $setting->details ?? old('details')!!}
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
    @include('sweetalert')

@endsection
