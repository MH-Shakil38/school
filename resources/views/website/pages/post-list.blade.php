@extends('website.layouts.schoolMaster')
@section('content')
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="box-inner row">
                        <div class="col-md-12">
                            <div class="inner-pager-box">
                                <div class="inner-page-title text-center text-dark">
                                    <span>{{ $category->bn_name ?? $category}}</span>
                                </div>
                            </div>
                        </div>
                        @forelse($infos as $info)
                            <div class="col-md-12">
                                <div class="details-box">
                                    <div class="icon">
                                        <a href="{{route('notice.details',$info->id)}}" target="_blank">
                                            <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                        </a>
                                    </div>
                                    <div class="textTitle">
                                        <a href="{{route('notice.details',$info->id)}}" target="_blank">
                                            <h4>{{$info->title ?? ''}}</h4>
                                            <!-- <div class="details"></div> -->
                                        </a>
                                    </div>
                                    <div class="detailsBtn">
                                        <a href="{{route('notice.details',$info->id)}}" target="_blank">See more</a>
                                    </div>
                                </div>
                            </div>
                        @empty

                            <div class="col-md-12">
                                <div class="inner-pager-box">
                                    <div class="inner-page-title text-center text-dark">
                                        <hr>
                                        <span>not found</span>
                                    </div>
                                </div>
                            </div>

                        @endforelse
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="inner-pager-box">
                        <div class="inner-page-title">
                            {{$categories->bn_name ?? ''}}
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
