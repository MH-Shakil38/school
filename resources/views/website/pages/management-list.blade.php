@extends('website.layouts.schoolMaster')
@section('content')
    <div class="container">
        <div class="row">
            @forelse(managements() as $info)
                <div class="col-md-3" style="margin-bottom: 20px">
                    <div class="photo-slide singCourse_imgarea">
                        <a href="{{route('management.details',[$info->id,str_replace($info->name,' ','-')])}}">
                            <img style="height: 191px; border: 7px solid #30654c" src="{{asset($info->image)}}"
                                 class="-mg-fulid w-100" alt="">
                        </a>
                        <div class="bg-danger text-center" style="background: #2d483a;padding: 2px;font-weight: bold">
                            <span href="" style="color: #FFFFFF"><i style="margin-right: 5px" class="fa fa-user mr-1"></i>{{$info->name}}</span><br>
                            <span href="" style="color: #cfce18"><i style="margin-right: 5px" class="fa fa-book mr-1"></i>{{$info->designation->name ?? '----'}}</span>
                        </div>
                        <div class="bg-danger text-center" style="padding: 5px;background: #30654c">
                            <a href="{{$info->facebook}}" class="btn btn-primary p-2"><i class="fa fa-facebook"></i></a>
                            <a href="{{route('management.details',[$info->id,str_replace($info->name,' ','-')])}}"
                               class="btn btn-success p-2"><i class="fa fa-eye"></i></a>
                            <a href="{{$info->youtube}}" class="btn btn-danger p-2"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
