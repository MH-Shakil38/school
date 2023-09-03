<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 achievements">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3>আমাদের অর্জন</h3>
            </div>

            <a href="{{asset('/')}}/media/525/Achievement.pdf" target="_blank" class="home-achivement">
                <div class="home-achivement-img">
                    <img src="{{asset('/theam1/')}}/media/525/Achievement.pdf" alt="d-block w-100">
                </div>
                <div class="home-achivement-content">
                    <p>Achievements of CCPC</p>
                    <span>19 Jun, 2023</span>
                </div>
            </a>
            <div class="text-right lastLink">
                <a href="achievements.html">আরো দেখুন</a>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 event">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3>নিউজ এন্ড ইভেন্টস</h3>
            </div>

            <div class="text-right lastLink">
                <a href="news-and-events.html">আরো দেখুন</a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 achievements">
        <div class="page-content">
            <div class="home-achivement-heading">
                <h3>ভিডিও গ্যালারি</h3>
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
                <h3>ফটো গ্যালারি</h3>
            </div>

            <div class="mx-0 photoGallery">
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
