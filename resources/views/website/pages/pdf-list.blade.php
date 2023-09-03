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
                                    <span>{{$category ?? $category->bn_name}}</span>
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
                            {{$category}} not found
                        @endforelse
                        <div class="col-md-12">
                            <div class="details-box">
                                <div class="icon">
                                    <a href="http://ccpc.edu.bd/syllabus/class-7-full-syllabus-2020" target="_blank">
                                        <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                    </a>
                                </div>
                                <div class="textTitle">
                                    <a href="http://ccpc.edu.bd/syllabus/class-7-full-syllabus-2020" target="_blank">
                                        <h4>৭ম শ্রেণির পুনর্বিন্যাসকৃত পাঠ্যসূচি-২০২০</h4>
                                        <!-- <div class="details"></div> -->
                                    </a>
                                </div>
                                <div class="detailsBtn">
                                    <a href="http://ccpc.edu.bd/syllabus/class-7-full-syllabus-2020" target="_blank">See more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="details-box">
                                <div class="icon">
                                    <a href="http://ccpc.edu.bd/syllabus/class-8-full-syllabus-2020" target="_blank">
                                        <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                    </a>
                                </div>
                                <div class="textTitle">
                                    <a href="http://ccpc.edu.bd/syllabus/class-8-full-syllabus-2020" target="_blank">
                                        <h4>৮ম শ্রেণির পুনর্বিন্যাসকৃত পাঠ্যসূচি-২০২০</h4>
                                        <!-- <div class="details"></div> -->
                                    </a>
                                </div>
                                <div class="detailsBtn">
                                    <a href="http://ccpc.edu.bd/syllabus/class-8-full-syllabus-2020" target="_blank">See more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="details-box">
                                <div class="icon">
                                    <a href="http://ccpc.edu.bd/syllabus/class-9-full-syllabus-2020" target="_blank">
                                        <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                    </a>
                                </div>
                                <div class="textTitle">
                                    <a href="http://ccpc.edu.bd/syllabus/class-9-full-syllabus-2020" target="_blank">
                                        <h4>৯ম শ্রেণির পুনর্বিন্যাসকৃত পাঠ্যসূচি-২০২০</h4>
                                        <!-- <div class="details"></div> -->
                                    </a>
                                </div>
                                <div class="detailsBtn">
                                    <a href="http://ccpc.edu.bd/syllabus/class-9-full-syllabus-2020" target="_blank">See more</a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="inner-pager-box">
                                <div class="inner-page-title text-center text-dark">
                                    <span>All Booklist</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="details-box">
                                <div class="icon">
                                    <a href="http://ccpc.edu.bd/notice/class-11-booklist-2020-2021" target="_blank">
                                        <img src="http://ccpc.edu.bd/frontend/ccpc/images/pdf-icon.png" alt="">
                                    </a>
                                </div>
                                <div class="textTitle">
                                    <a href="http://ccpc.edu.bd/notice/class-11-booklist-2020-2021" target="_blank">
                                        <h4>একাদশ শ্রেণির বুক লিস্ট  (২০২০-২০২১) এখান থেকে ডাউনলোড করুন</h4>
                                        <!-- <div class="details"></div> -->
                                    </a>
                                </div>
                                <div class="detailsBtn">
                                    <a href="http://ccpc.edu.bd/notice/class-11-booklist-2020-2021" target="_blank">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="inner-pager-box">
                        <div class="inner-page-title">
                            <a href=""><i class="fa fa-home" aria-hidden="true"></i></a> / <span>পাঠ্যবইয়ের তালিকা ও সিলেবাস</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
