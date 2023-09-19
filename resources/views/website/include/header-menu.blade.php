<div class="container-fluid menu" style="width:85%">
    <div class="menuBar">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="dropdown">
                        <a class="dropdown-toggle  active " href="{{url('/')}}"> <span>প্রচ্ছদ </span> </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle " aria-haspopup="true" aria-expanded="false" role="button"
                           data-toggle="dropdown" aria-expanded="false"> <span>আমাদের কথা</span> <i
                                class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">
                            @forelse(messageCategory() as $data)
                                <li><a href="{{route('message.details',$data->id)}}"> {{$data->name}}</a></li>
                            @empty
                            @endforelse
                            {{--                            <li><a  href="principals-message.html"> অধ্যক্ষের বাণী</a></li>--}}
                            {{--                            <li><a  href="chief-patron.html"> প্রধান পৃষ্ঠপোষকের বাণী</a></li>--}}
                            {{--                            <li><a  href="board-of-directors.html"> পরিচালনা পর্ষদ</a></li>--}}
                            {{--                            <li><a  href="master-plan.html"> মাস্টারপ্ল্যান</a></li>--}}
                            {{--                            <li><a  href="history.html"> প্রতিষ্ঠানের ইতিহাস</a></li>--}}
                            {{--                            <li><a  href="vision-and-objectives.html"> লক্ষ্য ও উদ্দেশ্য</a></li>--}}
                            {{--                            <li><a  href="infrastructure.html"> ভৌত অবকাঠামো</a></li>--}}

                        </ul>
                    </li>
                    @forelse(menus() as $data)
                        <li class="dropdown">
                            <a class="dropdown-toggle " aria-haspopup="true" aria-expanded="false" role="button"
                               data-toggle="dropdown" aria-expanded="false"> <span>{{$data->bn_name}} </span> <i
                                    class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                @if($data->id == 1)
                                    @forelse(sub_menus($data->id) as $info)
                                        <li><a href="{{route('message.details',$info->id)}}"> {{$info->bn_name}}</a></li>
                                    @empty
                                    @endforelse

                                @else
                                    @forelse(sub_menus($data->id) as $info)
                                    <li><a href="{{route('post.show',$info->id)}}"> {{$info->bn_name}}</a></li>
                                    @empty
                                    @endforelse
                                @endif

                            </ul>
                        </li>
                    @empty
                    @endforelse
                    <li class="dropdown">
                        <a class="dropdown-toggle " aria-haspopup="true" aria-expanded="false" role="button"
                           data-toggle="dropdown" aria-expanded="false"> <span> গ্যালারি</span> <i
                                class="fa fa-angle-down"></i> </a>
                        <ul class="dropdown-menu">

                            <li><a  href="{{route('video.gallery')}}">ভিডিও গ্যালারি</a></li>
                            <li><a  href="{{route('image.gallery')}}">ফটো গ্যালারি</a></li>


                        </ul>
                    </li>
{{--                    <li class="dropdown">--}}
{{--                        <a class="dropdown-toggle " href="#"> <span>যোগাযোগ </span> </a>--}}
{{--                    </li>--}}

                    <li class="dropdown">
                        <a class="dropdown-toggle " href="{{route('post.show',22)}}"> <span>নোটিশবোর্ড </span> </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle " href="#">
                            <span>শিক্ষার্থী লগ ইন </span> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
