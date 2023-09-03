@extends('website.layouts.schoolMaster')
@section('content')
<section class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="inner-pager-box">
                    <div class="inner-page-content">
                        @if($details->details !=null)
                            <h4 style="padding: 15px;background: #4D4D4D;color: #FFFFFF;text-align: center">{{$details->title}}</h4>
                            <hr>
                        <div class="speech-box">
                            <div class="seech-content">
                                <div class="details">
                                    {!! $details->details ?? '' !!}
                                </div>
                            </div>
                        </div>
                        @endif

                            @if($details->file !=null)
                        <div class="speech-box">
                            <div class="">
                                <p><br></p><p><span style="color: white; font-family: Ubuntu; background-color: rgb(255, 250, 250);"><a href="#" style="color: white" target="_blank"> <h4 style="padding: 15px;background: #4D4D4D;color: #FFFFFF;text-align: center">{{$details->title}}</h4></a></span><br></p>
                                <object data="http://school.test/circular/1693678154-64f37a4a37560.pdf" type="application/pdf" width="100%" height="800px">
                                    <p>Alternative text - include a link <a href="http://school.test/circular/1693678154-64f37a4a37560.pdf">to the PDF!</a></p>
                                </object>
                            </div>
                        </div>
                            @endif
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="inner-pager-box">
                    <div class="inner-page-title">
                        <a href="#"><i class="fa fa-home" aria-hidden="true"></i></a> / <span> {{$category->bn_name ?? $category}}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
