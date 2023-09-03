@extends('website.layouts.schoolMaster')
@section('content')
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="inner-pager-box">
                        <div class="inner-page-content">
                            <div class="speech-box">
                                @if(isset($message->image))
                                <div class="speech-img text-center">
                                    <img src="{{asset($message->image?? setting()->logo)}}"
                                        class="d-block w-100" alt="">
                                    <span>{{$message->title ?? ''}}</span>
                                </div>
                                @endif
                                <div class="seech-content">
                                    <div class="details">
                                                {!! $message->details ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="inner-pager-box">
                        <div class="inner-page-title">
                            <a href=""><i class="fa fa-home" aria-hidden="true"></i></a> / <span>আমাদের কথা / {{$category->name ?? ''}}</span>
                        </div>
                    </div>
                    <div class="inner-pager-box" style="margin: 10px 0;">
                        <div class="inner-page-title">
                            <i class="fa fa-file-video-o" aria-hidden="true"></i> Suggested Video
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .inner-pager-box{
            padding: 40px!important;
        }
    </style>

@endsection
