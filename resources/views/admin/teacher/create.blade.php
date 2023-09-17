
@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-gray">
                    <a href="{{route('teachers.index')}}" class="float-right btn btn-primary">Teacher List</a>
                    <a href="{{route('teachers.index')}}" class="float-right btn btn-danger mr-2">Cencal</a>
                    <h5>Add Teacher</h5>
                </div>
                <div class="card-body">
                    @if(isset($teacher))
                        <form action="{{route('teachers.update',$teacher->id)}}" method="post"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row bg-gray" >
                                        <div class="col-md-12">
                                        <h4 class=" text-white pl-4 p-2" style="background: #4e5a4e">Personal Info</h4>
                                        <hr>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <input type="text" name="name" class="form-control" value="{{isset($teacher) ? $teacher->name : old('name')}}" placeholder="Enter Teacher Name">
                                                @error('name')
                                                    <div class="text-danger">{{$name}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Email</label>
                                                <input type="email" name="email" class="form-control" value="{{isset($teacher) ? $teacher->email : old('email')}}" placeholder="Ex: Example@gmail.com">
                                                @error('email')
                                                <div class="text-danger">{{$email}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Phone</label>
                                                <input type="number" name="phone" class="form-control" value="{{isset($teacher) ? $teacher->phone : old('phone')}}" placeholder="Ex: 018******">
                                                @error('phone')
                                                <div class="text-danger">{{$phone}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Date of Birth</label>
                                                <input type="date" name="dob" value="{{isset($teacher) ? $teacher->dob : old('dob')}}" id="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">NID</label>
                                                <input type="number" name="nid" class="form-control" value="{{isset($teacher) ? $teacher->nid : old('nid')}}" placeholder="Ex: 0000 1111 2222">
                                                @error('nid')
                                                <div class="text-danger">{{$father_name}}</div>
                                                @enderror
                                            </div>
                                        </div>



                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Father Name</label>
                                                <input type="text" name="father_name" class="form-control" value="{{isset($teacher) ? $teacher->father_name : old('father_name')}}" placeholder="Ex: Father Name">
                                                @error('address')
                                                <div class="text-danger">{{$father_name}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Mother Name</label>
                                                <input type="text" name="mother_name" class="form-control" value="{{isset($teacher) ? $teacher->mother_name : old('mother_name')}}" placeholder="Ex: Mother Name">
                                                @error('mother_name')
                                                <div class="text-danger">{{$mother_name}}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Address</label>
                                                <input type="text" name="address" class="form-control" value="{{isset($teacher) ? $teacher->address : old('address')}}" placeholder="Ex: 1212 dhaka">
                                                @error('address')
                                                <div class="text-danger">{{$address}}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="name">Relationship</label>
                                                <select name="relationship" id="" class="form-control">
                                                    <option disabled selected>Select One</option>
                                                    <option value="1">Married</option>
                                                    <option value="2">Unmarried</option>
                                                    <option value="3">Separate</option>
                                                </select>
                                                @error('address')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="name">Gender</label>
                                                <select name="gender" id="" class="form-control">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                                @error('gender')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="name">Blood Group</label>
                                                <select name="blood_group_id" id="" class="form-control">
                                                    <option disabled selected>Select Group</option>
                                                    @forelse($bloodGroups as $info)
                                                    <option value="{{$info->id}}">{{$info->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                @error('blood_group_id')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Image</label>
                                                <input type="file" name="image" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">CV</label>
                                                <input type="file" name="cv" id="" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h4 class=" text-white pl-4 p-2" style="background: #4e5a4e">Social Info</h4>
                                            <hr>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="facebook">Facebook</label>
                                                <input type="text" name="facebook" class="form-control" value="{{isset($teacher) ? $teacher->facebook : old('facebook')}}" placeholder="Ex: www.facebook.com">
                                                @error('facebook')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="youtube">Youtube</label>
                                                <input type="text" name="youtube" class="form-control" value="{{isset($teacher) ? $teacher->facebook : old('youtube')}}" placeholder="Ex: www.youtube.com">
                                                @error('youtube')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="youtube">WhatsApp</label>
                                                <input type="number" name="whatsapp" class="form-control" value="{{isset($teacher) ? $teacher->whatsapp : old('whatsapp')}}" placeholder="Ex: 012******">
                                                @error('whatsapp')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <h4 class="text-white pl-4 p-2" style="background: #4e5a4e">Official Info</h4>
                                            <hr>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Joining Date</label>
                                                <input type="date"  name="join_date" id="" class="form-control" value="{{isset($teacher) ? $teacher->join_date : old('join_date')}}">
                                                @error('join_date')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="name">Designation</label>
                                                <select name="designation_id" id="" class="form-control">
                                                    <option disabled selected>Select Designation</option>
                                                    @forelse($designations as $info)
                                                        <option {{isset($teacher) && $info->id == $teacher->designation_id ? 'selected' : ''}} value="{{$info->id}}">{{$info->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                @error('address')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="1">De-Active</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="subject">Subject</label>
                                                <select name="subject_id" id="" class="form-control">
                                                    <option disabled selected>Select Subject</option>
                                                    @forelse($subjects as $info)
                                                        <option value="{{$info->id}}" {{isset($teacher) && $info->id == $teacher->subject_id ? 'selected' : ''}}>{{$info->name}}</option>
                                                    @empty
                                                    @endforelse
                                                </select>
                                                @error('subject_id')
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group text-dark">
                                                  <textarea id="summernote" name="message">
                                                      {!!  $teacher->message ?? old('message')!!}
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

@endsection
