<header>
    {{--    <div class="container">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-md-6"></div>--}}
    {{--            <div class="col-md-6 text-right">--}}
    {{--                <div class="header-btn">--}}
    {{--                    <a href="" class="btn btn-custom">Teacher's Portal</a>--}}
    {{--                    <a href="" class="btn btn-custom">Student's Portal</a>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-xs-3 col-sm-12 col-md-2 col-lg-2">
                <div class="header-content">
                    <div class="header-logo-img">
                        <a href="{{url('/')}}">
                            <img src="{{asset(setting()->logo) ?? ''}}" alt="" class="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-8 col-lg-8">
                <div class="header-content" style="margin-left: -35px;">
                    <div class="header-inner-content text-center">
                        <h1>
                            <a href="{{url('/')}}">{{setting()->bn_name ?? setting()->en_name}}</a>
                        </h1>
                        <div class="underline"></div>
                        <h6>{{setting()->full_address}}.</h6>
                    </div>
                </div>
            </div>

            <div class="col-xs-3 col-sm-12 col-md-2 col-lg-2">
                <div class="header-left-img text-center">
                    <img src="{{asset('/theam1/')}}/media/logos/Tl1MhBfHM4EaLIjK3CgGNcXMrCJRXBDhtJM0S0jV.png" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
    </div>

   @include('website.include.header-menu')
</header>
