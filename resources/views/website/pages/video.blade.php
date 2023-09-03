@extends('website.layouts.schoolMaster')
@section('content')
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="box-inner row">
                        @forelse($videos as $info)
                            <div class="col-lg-6">
                                <div class="videoGallaryImage">
                                    <img src="https://img.youtube.com/vi/{{ $info->video_id }}/maxresdefault.jpg" alt="{{ $info->title }}" alt="" class="" height="195" width="100%">
                                    <div class="playbutton text-center">
                                        <a class="venobox vbox-item" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/embed/{{ $info->video_id }}"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            <h4 class="rounded" style=" background: #075313;
                                        padding: 10px;
                                        color: #fff;
                                        margin-top: 0px;" title="{{$info->title}}">{{substr($info->title,0,40)}}...</h4>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="inner-pager-box">
                        <div class="inner-page-title">
                            <a href="{{route('video.gallery')}}"><i class="fa fa-video-camera" aria-hidden="true"></i> / <span>ভিডিও গ্যালারি</span></a>
                            <hr>
                            @forelse(VideoCategory() as $info)
                                <a href="{{route('category.video',$info->id)}}"><i class="fa fa-video-camera" aria-hidden="true"></i> / <span>{{$info->name}}.</span></a>
                                <br>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
