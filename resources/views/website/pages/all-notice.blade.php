@extends('website.layouts.schoolMaster')
@section('content')
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="box-inner row">
                        <div class="col-md-12">
                            <div class="inner-pager-box " style="background: #035b33;color: #ffffff">
                                <div class=" inner-page-title text-center " style="color: white">
                                    <span>সকল নোটিশ </span>
                                </div>
                            </div>
                        </div>
                        @forelse($notices as $info)
                            <div class="col-md-12">
                                <div class="details-box">
                                    <div class="notice-box-content-date">
                                        <p class="notice-date"> {{ \Carbon\Carbon::parse($info->created_at)->format('d') }}</p>
                                        <p class="notice-month">{{ \Carbon\Carbon::parse($info->created_at)->format('M') }}</p>
                                    </div>
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
                            Notice not found
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
