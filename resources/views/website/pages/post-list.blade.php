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
                                        <a href="http://ccpc.edu.bd/syllabus/class-6-full-syllabus-2020" target="_blank">
                                            <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                        </a>
                                    </div>
                                    <div class="textTitle">
                                        <a href="http://ccpc.edu.bd/syllabus/class-6-full-syllabus-2020" target="_blank">
                                            <h4>{{$info->title ?? ''}}</h4>
                                            <!-- <div class="details"></div> -->
                                        </a>
                                    </div>
                                    <div class="detailsBtn">
                                        <a href="http://ccpc.edu.bd/syllabus/class-6-full-syllabus-2020" target="_blank">See more</a>
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
                            <a href=""><i class="fa fa-home" aria-hidden="true"></i></a> / <span>{{$category->bn_name ?? $category}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
