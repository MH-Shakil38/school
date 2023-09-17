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
                                        @if($message->id == 4)
                                            <img src="{{asset($message->image ?? setting()->logo)}}"
                                                 class="d-block w-100" alt="" style="height: 350px;width: 100%">
                                        @else
                                            <img src="{{asset($message->image ?? setting()->logo)}}"
                                                 class="d-block w-100" alt="">
                                        @endif
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
                            <a href=""><i class="fa fa-home" aria-hidden="true"></i></a> / <span>আমাদের কথা </span>
                            <hr>

                            @forelse(messageCategory() as $info)
                                @if($info->id == $category->id)
                                    <a href="{{route('message.details',$info->id)}}"
                                       style="background: #413c3c; display: block; padding: 6px;  color: #fff;"><i
                                            class="fa fa-home" aria-hidden="true"></i>/
                                        <span> {{$info->name ?? ''}}</span></a>
                                @else
                                    <a href="{{route('message.details',$info->id)}}"><i class="fa fa-home"
                                                                                        aria-hidden="true"></i>/
                                        <span> {{$info->name ?? ''}}</span></a>
                                    <br>
                                @endif
                            @empty
                            @endforelse

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <style>
        .inner-pager-box {
            padding: 40px !important;
        }
    </style>

@endsection
