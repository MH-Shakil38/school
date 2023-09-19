<section class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('website.include.banner')
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8  order-md-2">

                <div class="page-box">

                   @include('website.include.home-slider')

                </div>
{{--                <div class="page-box mt-1">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                            <div class="box-heading">--}}
{{--                                <h3></h3>--}}

{{--                                <div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                @include('website.include.gallery-event')




            </div>

           @include('website.include.home-right-div')
        </div>
    </div>
</section>
