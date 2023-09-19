@extends('website.layouts.schoolMaster')
@section('content')
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="box-inner row">
                        @forelse(gallery() as $info)
                        <div class="col-md-4" style="margin-bottom: 20px">
                            <div class="single_course">
                                <div class="singCourse_imgarea">
                                    <a class="venobox vbox-item" data-gall="gallery01" href="{{asset($info->image)}}">
                                        <img style="max-height: 230px;min-height: 230px" src="{{asset($info->image)}}" alt="" class="img-fulid w-100">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="inner-pager-box">
                        <div class="inner-page-title">
                            <a href="{{route('image.gallery')}}"><i class="fa fa-image" aria-hidden="true"></i> / <span>ফটো গ্যালারি</span><hr></a>
                            @forelse(galleryCategory() as $info)
                            <a  href="{{route('category.gallery',$info->id)}}"><i class="fa fa-image" aria-hidden="true"></i> / <span> {{$info->name}}</span></a>
                                <br>
                            @empty @endforelse

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
