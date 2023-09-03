<section class="slider">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @forelse(slider() as $info)
                        <li data-target="#carousel-example-generic" data-slide-to="{{$loop->iteration}}"  class="active" ></li>
                    @empty
                    @endforelse
{{--                    <li data-target="#carousel-example-generic" data-slide-to="0"  class="active" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="1" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="2" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="3" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="4" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="5" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="6" ></li>--}}
{{--                    <li data-target="#carousel-example-generic" data-slide-to="7" ></li>--}}
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @forelse(slider() as $info)
                        <div class="item  {{$loop->iteration == 1 ? 'active' : ''}} ">
                            <img src="{{asset($info->image)}}" alt="..." class="img-responsive">
                            <div class="carousel-caption"></div>
                        </div>
                    @empty
                    @endforelse
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/8/slider-1.png" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/7/slider-2.png" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/6/slider-3.png" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/5/slider-4.png" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/526/1-(6).jpg" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/2/slider-7.png" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
{{--                    <div class="item ">--}}
{{--                        <img src="{{asset('/theam1/')}}/media/1/slider-8.png" alt="..." class="img-responsive">--}}
{{--                        <div class="carousel-caption"></div>--}}
{{--                    </div>--}}
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
