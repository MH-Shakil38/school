@extends('admin.layouts.admin-master')

@section('content')
        <div class="card">
            <div class="card-header">
                <a  class="btn btn-primary float-right" href="{{route('teachers.create')}}">New Teacher</a>
                <h4>Teachers</h4>
            </div>
            <div class="card-body">
                <div class="row">
                @forelse($teachers as $info)
                    <div class="col-md-3 col-sm-12 col-lg-3">
                        <div class="card">
                            <img height="200px" src="{{asset($info->image)}}" alt="">
                            <div class="card-footer bg-gradient-navy text-center">
                                <span>{{$info->name}}</span>
                                <hr>
                                <a href="{{route('teachers.edit',$info->id)}}" class="bg-primary btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="" class="bg-primary btn btn-info"><i class="fa fa-eye"></i></a>
                                <a href="" class="bg-primary btn btn-info"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                </div>
            </div>
        </div>
@endsection
