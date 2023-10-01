@extends('website.layouts.schoolMaster')
@section('meta')
    <meta property="og:url" content="{{route('notice.details',$details->id)}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$details->title}}" />
    <meta property="og:description" content="{!! $details->details ?? '' !!}" />
    <meta property="og:image" content="{{asset(setting()->logo)}}" />
@endsection
@section('content')
<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="inner-pager-box">
                    <div class="inner-page-content">
                        <h4 style="padding: 15px;background: #4D4D4D;color: #FFFFFF;text-align: center">{{$details->title}} <a href="https://facebook.com/sharer.php?u={{route('notice.details',$details->id)}}" class="btn btn-primary" style="float: right;margin-top: -4px"> <i class="fa fa-facebook-f"></i> </a></h4>


                            @if($details->file !=null)
                        <div class="speech-box">
                            <div class="">
{{--                                <p><br></p><p><span style="color: white; font-family: Ubuntu; background-color: rgb(255, 250, 250);"><a href="#" style="color: white" target="_blank"> <h4 style="padding: 15px;background: #4D4D4D;color: #FFFFFF;text-align: center">{{$details->title}}</h4></a></span><br></p>--}}
                                <object data="{{asset($details->file ?? $details->image)}}" type="application/pdf" width="100%" height="800px">
                                    <p>Alternative text - include a link <a href="{{$details->file ?? $details->image}}">to the PDF!</a></p>
                                </object>
                            </div>
                        </div>
                            @endif
                        @if($details->details !=null)

                            <hr>
                            <div class="speech-box">
                                <div class="seech-content">
                                    <div class="details">
                                        {!! $details->details ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="inner-pager-box">
                    <div class="inner-page-title">
                        {{$categories->bn_name}}
                        <hr>
                        @forelse($categories->categories as $info)
                            @if($info->id == $category->id)
                                <a href="{{route('post.show',$info->id)}}" style="background: #413c3c; display: block; padding: 6px;  color: #fff;"><i class="fa fa-home" aria-hidden="true"></i>/ <span> {{$info->bn_name ?? ''}}</span></a>
                            @else
                            <a href="{{route('post.show',$info->id)}}"><i class="fa fa-home" aria-hidden="true"></i>/ <span> {{$info->bn_name ?? ''}}</span></a>
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

@endsection
