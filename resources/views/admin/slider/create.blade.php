@extends('admin.layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('slider.index')}}" class="float-right btn btn-primary">Slider List</a>
                    <h5>Home slider</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <label for="status">Slider Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label for="status">Status</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter a Slider Title">
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="1">Active</option>
                                        <option value="2">DeActive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(isset($slider))
                        <a href="{{route('slider.edit',$slider->id)}}" class="float-right btn btn-primary">Update</a>
                    @else
                        <a href="{{route('slider.create')}}" class="float-right btn btn-primary">Create</a>
                    @endif
                    <h5>Home slider</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Slider Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
