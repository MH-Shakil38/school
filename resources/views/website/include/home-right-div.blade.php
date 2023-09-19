{{--<div class="home-chairman chairman-box mt-1">--}}
{{--    <h3>অনলাইন ভর্তি</h3>--}}
{{--    <a href="https://ccpc.eabedon.com/" class="speach">--}}
{{--        <div class="speach-box">--}}
{{--            <div class="spech-img ">--}}
{{--                <img class="rounded-circle" style="border-radius: 50px 50px 50px 50px;" src="{{asset(setting()->logo)}}" alt="">--}}
{{--            </div>--}}
{{--            <div class="spech-cont">--}}
{{--                <button type="button" class="btn btn-primary btn-block" style="line-height: 48px;height: 53px;">আবেদন করার জন্য ক্লিক করুন</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}
{{--</div>--}}

{{--<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="margin-bottom:10px; padding:10px;">--}}
{{--    <div class="home-chairman chairman-box mt-1" style="padding: 10px;">--}}
{{--        <h4 style="padding-bottom:5px;  margin-bottom:5px; font-family: 'Ubuntu' !important; color: #b4a723 !important; border-bottom:1px solid #000;">Golden Jubilee Independence Of Bangladesh </h4>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-7">--}}
{{--                <img src="{{asset('/theam1/')}}/media/gb/promo.png" alt="" class="img-responsive">--}}
{{--            </div>--}}
{{--            <div class="col-md-5">--}}
{{--                <li style="list-style:none;"><i class="fa fa-external-link-square"></i> <a href="swadheentar-subrn-jyntee-ades-notis.html">আদেশ/ নোটিশ</a></li>--}}
{{--                <li style="list-style:none;"><i class="fa fa-external-link-square"></i> <a href="swadheentar-subrn-jyntee-karzkrm.html">কার্যক্রম</a></li>--}}
{{--                <li style="list-style:none;"><i class="fa fa-external-link-square"></i> <a href="swadheentar-subrn-jyntee-chbi-gzalari.html">ছবি গ্যালারি</a></li>--}}
{{--                <li style="list-style:none;"><i class="fa fa-external-link-square"></i> <a href="swadheentar-subrn-jyntee-krnar-vidioo.html">ভিডিও</a></li>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    @forelse(messageCategory() as $info)
        @if($loop->iteration <4)
    <div class="home-chairman chairman-box mt-1">
        <h3>{{$info->name}}</h3>
        <a href="{{route('message.details',$info->id)}}l" class="speach">
            <div class="">
                <div class="inner-pager-box" style="height: 240px">
                    <div class="inner-page-content">
                        <div class="speech-box">
                            <div class="speech-img text-center" >
                                <img  height="80" style="width: 75px !important;" src="{{asset($info->message->image?? setting()->logo)}}"
                                      class="d-block w-100 m-auto" alt="">
                                <span>{{$info->message->title ?? ''}}</span>
                            </div>
                            <div class="seech-content" style="margin-top: 10px">
                                <div class="details" style="color:black;max-height: 112px;overflow: hidden;text-align: justify;line-height: 28px;display: -webkit-box;-webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                                    {!! strip_tags($info->message->details) !!}
{{--                                    {!! $info->message->details ?? '' !!}--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="spech-img">--}}
{{--                    <img src="{{asset($info->message->image ?? '')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="spech-cont">--}}
{{--                    <h4>{{$info->message->title ?? ''}}</h4>--}}
{{--                    <span>Chief Patron</span>--}}
{{--                </div>--}}
            </div>
        </a>
    </div>
        @endif
{{--    <div class="home-chairman chairman-box mt-1">--}}
{{--        <h3>সভাপতির বাণী</h3>--}}
{{--        <a href="presidents-message.html" class="speach">--}}
{{--            <div class="speach-box">--}}
{{--                <div class="spech-img">--}}
{{--                    <img src="{{asset('/theam1/')}}/media/498/BA-4782-Brig-Gen-Rezaul-Karim%2c-ndc%2c-psc-(pp-size).jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="spech-cont">--}}
{{--                    <h4>Brig Gen Rezaul Karim, ndc, psc</h4>--}}
{{--                    <span>Chairman</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--    <div class="home-chairman chairman-box mt-1">--}}
{{--        <h3>অধ্যক্ষের বাণী</h3>--}}
{{--        <a href="principals-message.html" class="speach">--}}
{{--            <div class="speach-box">--}}
{{--                <div class="spech-img">--}}
{{--                    <img src="{{asset('/theam1/')}}/media/52/TC_21416_dc71b209-802d-4c0b-b5be-4405100b5f60.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="spech-cont">--}}
{{--                    <h4>Col Mujibul Haque Sikder, PBGM</h4>--}}
{{--                    <span>Principal</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
    @empty

    @endforelse
{{--    <div class="home-chairman chairman-box mt-1">--}}
{{--        <h3>কেন সিসিপিসিতে পড়াশুনা</h3>--}}
{{--        <a href="#" class="speach">--}}
{{--            <div class="speach-box">--}}
{{--                <div class="spech-img">--}}
{{--                    <img src="{{asset('/theam1/')}}/media/logos/Ze5gz3KSmCLGdA5HijM0LDrnZ98Mb0JsQKWQFEix.jpg" alt="">--}}
{{--                </div>--}}
{{--                <div class="spech-cont">--}}
{{--                    <h4>ইছামতি এয়াকুব মরিয়ম উচ্চ বিদ্যালয়ে</h4>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}

    <div class="home-chairman mt-1">
        <h3>নোটিশ</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="demo2" style="overflow-y: hidden; height: 200px;">
                            @forelse(noticeBoard() as $info)
                                <li style="" class="news-item mt-1">
                                <div class="notice-box-content-home">
                                    <div class="notice-box-content-date">
                                        <p class="notice-date"> {{ \Carbon\Carbon::parse($info->created_at)->format('d') }}</p>
                                        <p class="notice-month">{{ \Carbon\Carbon::parse($info->created_at)->format('M') }}</p>
                                    </div>

                                    <div class="notice-box-content-all">

                                        <p>{{$info->title}}</p>
                                        <a href="{{route('notice.details',$info->id)}}" target="_blink">Read More</a>
                                    </div>
                                </div>
                            </li>
                            @empty
                            @endforelse
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">11</p>--}}
{{--                                        <p class="notice-month">May</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Raised issues &amp; feedback as per Parents&#039; Meeting</p>--}}
{{--                                        <a href="notice-board/raised-issues-feedback-as-per-parents-meeting.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">30</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Student Scholarship form and Notice 2023</p>--}}
{{--                                        <a href="notice-board/student-scholarship-form-and-notice-2023.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">29</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>দরিদ্র তহবিল গঠন সংক্রান্ত বিজ্ঞপ্তি</p>--}}
{{--                                        <a href="notice-board/dridr-thbil-gthn-sngkrant-bijngpti.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">16</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Pre Test Examination-2023_Science-G</p>--}}
{{--                                        <a href="notice-board/pre-test-examination-2023-science-g.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">16</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Pre Test Examination-2023_Science-F</p>--}}
{{--                                        <a href="notice-board/pre-test-examination-2023-science-f.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">16</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Pre Test Examination-2023_Science-E</p>--}}
{{--                                        <a href="notice-board/pre-test-examination-2023-science-e.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">16</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Pre Test Examination-2023_Science-D</p>--}}
{{--                                        <a href="notice-board/pre-test-examination-2023-science-d.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">16</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Pre Test Examination-2023_Science-C</p>--}}
{{--                                        <a href="notice-board/pre-test-examination-2023-science-c.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li style="" class="news-item mt-1">--}}
{{--                                <div class="notice-box-content-home">--}}
{{--                                    <div class="notice-box-content-date">--}}
{{--                                        <p class="notice-date">16</p>--}}
{{--                                        <p class="notice-month">Mar</p>--}}
{{--                                    </div>--}}

{{--                                    <div class="notice-box-content-all">--}}

{{--                                        <p>Pre Test Examination-2023_Science-B</p>--}}
{{--                                        <a href="notice-board/pre-test-examination-2023-science-b.html" target="_blink">Read More</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
            <a href="{{route('all.notice')}}" class="pull-right" style="color: #01016d;">View All</a>
        </div>
    </div>

    <div class="home-chairman mt-1">
        <h3>ফেইসবুক পেজ</h3>
        <div class="footer-social">
            <div class="embed-responsive embed-responsive-16by9" style="width: 109%">

                <a class="w-100" href="https://web.facebook.com/profile.php?id=100024065233822" target="_blank"><img class="w-100" style="background: no-repeat;height: 215px" src="{{setting()->logo ?? ''}}" alt=""></a>
{{--                <iframe class="embed-responsive-item"  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FChattogram-Cantonment-Public-College-CCPC-365141890721716%2F&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" style="border: none; overflow: hidden" scrolling="no" allowtransparency="true" width="100%" height="250" frameborder="0"></iframe>--}}
            </div>
        </div>
    </div>
        <div class="home-chairman chairman-box mt-1">
            <h3>Developed By</h3>
            <a href="https://www.facebook.com/maynuddin.shakil" class="speach">
                <div class="">
                    <div class="inner-pager-box" style="height: 240px">
                        <div class="inner-page-content">
                            <div class="speech-box">
                                <div class="speech-img text-center" style="color: black;">
                                    <img  height="120" style="width: 75px !important;" src="{{asset('/maynuddin.jpg')}}"
                                          class="d-block w-100 m-auto " alt="">
                                    <div class="" style="background: #6e7a6c5e">
                                        <h4 style="margin-bottom: 0px">Engr. Maynuddin Hasan</h4>
                                        <span class="border-bottom">Software Engineer</span><br>
                                        <span>At Asian Television Ltd.</span>
                                    </div>
                                </div>
                                <div class="seech-content" style="margin-top: 10px">
                                    <div class="details" style="color:black;max-height: 112px;overflow: hidden;text-align: justify;line-height: 28px;display: -webkit-box;-webkit-line-clamp: 4; -webkit-box-orient: vertical;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                <div class="spech-img">--}}
                    {{--                    <img src="{{asset($info->message->image ?? '')}}" alt="">--}}
                    {{--                </div>--}}
                    {{--                <div class="spech-cont">--}}
                    {{--                    <h4>{{$info->message->title ?? ''}}</h4>--}}
                    {{--                    <span>Chief Patron</span>--}}
                    {{--                </div>--}}
                </div>
            </a>
        </div>
    <div class="home-chairman mt-1">
        <h3>ভিজিটর কাউন্টার</h3>
        <div class="count-table">
            <ul class="list-unstyled">
                <!-- <li class="list-group-item"><i class="fa fa-laptop" aria-hidden="true"> </i> Now Online Visitors : <b>11</b> </li> -->
                <li class="list-group-item"><i class="fa fa-desktop" aria-hidden="true"> </i> Today Total Visitors : <b>506</b> </li>
                <!-- <li class="list-group-item"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"> </i> Yesterday Total Visitors : <b>542</b> </li> -->
                <!-- <li class="list-group-item"><i class="fa  fa-users" aria-hidden="true"> </i> Weekly Total Visitors : <b>13</b> </li> -->
                <!-- <li class="list-group-item"><i class="fa  fa-users" aria-hidden="true"> </i> Monthly Total Visitors : <b>2979</b> </li> -->
                <li class="list-group-item"><i class="fa  fa-users" aria-hidden="true"> </i> Grand Total From 25 May 2021 :
                    <b>457601</b>
                </li>
            </ul>
        </div>
    </div>
</div>
