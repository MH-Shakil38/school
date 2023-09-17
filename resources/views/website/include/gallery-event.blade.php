<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 achievements">
        <div class="page-content" style="height: 41%">
            @php
                $history = sub_menus_first(6);
            @endphp
            <div class="home-achivement-heading">
                <h3 style="background: #30654c"> প্রতিষ্ঠানের ইতিহাস</h3>
            </div>
            <div class="row">
                <a href="{{route('message.details',6)}}">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ">
                    <img style="height: 75%;width: 106%;margin-top: 1%" src="{{asset($history->image ?? setting()->logo)}}" height="" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 ">
                    <div class="history"
                    style="
                     overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 9;
                    -webkit-box-orient: vertical;
                    "
                    >
                    <p style="padding: 0px; margin: 4px;text-align: justify;font-size: 16px;margin: 0px 10px">
                        {!! strip_tags($history ? $history->details : null) !!}
{{--                        {!! strip_tags(substr($history->details)) !!}--}}
{{--                        <small class="text-primary">আরো দেখুন...</small>--}}
                    </p>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 achievements">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3 style="background: #30654c">পরিচালনা পরিষদ <a href="{{route('management.list')}}" class="float-left" style="float: right;color: white;margin-right: 8px">আরো দেখুন...</a> </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-content teacher-slider">
                    <div class="mx-0 teacherGallery">
                        @forelse(managements() as $info)
                            <div class="photo-slide singCourse_imgarea">
                                <a  href="{{route('management.details',$info->id)}}">
                                    <img  style="height: 174px; border: 7px solid #30654c" src="{{asset($info->image)}}" class="-mg-fulid w-100" alt="">
                                </a>
                                <div class="bg-danger text-center" style="background: #2d483a;padding: 2px;font-weight: bold" >
                                    <span href="" style="color: #FFFFFF"><i style="margin-right: 5px" class="fa fa-user mr-1"></i>{{$info->name}}</span>
                                    <br>
                                    <span href="" style="color: #cfce18"><i style="margin-right: 5px" class="fa fa-book mr-1"></i>{{$info->designation->name ?? '----'}}</span>
                                </div>
                                <div class="bg-danger text-center" style="padding: 5px;background: #30654c" >
                                    <a href="{{$info->facebook}}" class="btn btn-primary p-2"><i class="fa fa-facebook"></i></a>
                                    <a href="{{route('management.details',$info->id)}}" class="btn btn-success p-2"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger p-2"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 achievements">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3 style="background: #30654c">শিক্ষক <a href="{{route('teacher.list')}}" class="float-left" style="float: right;color: white;margin-right: 8px">আরো দেখুন...</a> </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-content teacher-slider">
                    <div class="mx-0 teacherGallery">
                        @forelse(teachers() as $info)
                            <div class="photo-slide singCourse_imgarea">
                                <a  href="{{route('teacher.details',[$info->id,str_replace($info->name,' ','-')])}}">
                                    <img  style="height: 174px; border: 7px solid #30654c" src="{{asset($info->image)}}" class="-mg-fulid w-100" alt="">
                                </a>
                                <div class="bg-danger text-center" style="background: #2d483a;padding: 2px;font-weight: bold" >
                                    <span href="" style="color: #FFFFFF"><i style="margin-right: 5px" class="fa fa-user mr-1"></i>{{$info->name}}</span>
                                    <br>
                                    <span href="" style="color: #cfce18"><i style="margin-right: 5px" class="fa fa-book mr-1"></i>{{$info->designation->name ?? '----'}}</span>
                                </div>
                                <div class="bg-danger text-center" style="padding: 5px;background: #30654c" >
                                    <a href="{{$info->facebook}}" class="btn btn-primary p-2"><i class="fa fa-facebook"></i></a>
                                    <a href="{{route('teacher.details',[$info->id,str_replace($info->name,' ','-')])}}" class="btn btn-success p-2"><i class="fa fa-eye"></i></a>
                                    <a href="" class="btn btn-danger p-2"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 achievements">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3 style="background: #30654c">শিক্ষার্থী <a href="" class="float-left" style="float: right;color: white;margin-right: 8px">আরো দেখুন...</a> </h3>
            </div>
        </div>
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="page-content teacher-slider">--}}
{{--                    <div class="mx-0 teacherGallery">--}}
{{--                        @forelse(teachers() as $info)--}}
{{--                            <div class="photo-slide singCourse_imgarea">--}}
{{--                                <a  href="{{route('teacher.details',[$info->id,str_replace($info->name,' ','-')])}}">--}}
{{--                                    <img  style="height: 174px; border: 7px solid #30654c" src="{{asset($info->image)}}" class="-mg-fulid w-100" alt="">--}}
{{--                                </a>--}}
{{--                                <div class="bg-danger text-center" style="background: #2d483a;padding: 2px;font-weight: bold" >--}}
{{--                                    <span href="" style="color: #FFFFFF"><i style="margin-right: 5px" class="fa fa-user mr-1"></i>{{$info->name}}</span>--}}
{{--                                    <br>--}}
{{--                                    <span href="" style="color: #cfce18"><i style="margin-right: 5px" class="fa fa-book mr-1"></i>{{$info->designation->name ?? '----'}}</span>--}}
{{--                                </div>--}}
{{--                                <div class="bg-danger text-center" style="padding: 5px;background: #30654c" >--}}
{{--                                    <a href="{{$info->facebook}}" class="btn btn-primary p-2"><i class="fa fa-facebook"></i></a>--}}
{{--                                    <a href="{{route('teacher.details',[$info->id,str_replace($info->name,' ','-')])}}" class="btn btn-success p-2"><i class="fa fa-eye"></i></a>--}}
{{--                                    <a href="" class="btn btn-danger p-2"><i class="fa fa-youtube-play"></i></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                        @endforelse--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 achievements">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3 style="background: #30654c">ভিডিও গ্যালারি</h3>
            </div>
            <div class="mx-0 photoGallery">
                @forelse(videos() as $info)
                    <div class="videoGallaryImage">
                        <img src="https://img.youtube.com/vi/{{ $info->video_id }}/maxresdefault.jpg" alt="{{ $info->title }}" alt="" class="" height="195" width="100%">
                        <div class="playbutton text-center">
                            <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/embed/{{ $info->video_id }}"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>




            <div class="text-right lastLink">
                <a href="{{route('video.gallery')}}">আরো দেখুন</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 event">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3 style="background: #30654c">ফটো গ্যালারি</h3>
            </div>

            <div class="mx-0 photoGallery " >
                @forelse(gallery() as $info)
                    <div class="photo-slide singCourse_imgarea">
                        <a class="venobox vbox-item" data-gall="gallery01" href="{{asset($info->image)}}">
                            <img src="{{asset($info->image)}}" class="-mg-fulid w-100" alt="">
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="text-right lastLink">
                <a href="{{route('image.gallery')}}">আরো দেখুন</a>
            </div>
        </div>
    </div>
</div>

<style>

</style>

