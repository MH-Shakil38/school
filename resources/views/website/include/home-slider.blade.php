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
