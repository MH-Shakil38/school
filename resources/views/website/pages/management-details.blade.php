@extends('website.layouts.schoolMaster')
@section('content')
    <div class="container">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if($management->image !=null)
                                    <img src="{{asset($management->image)}}" alt="Admin" width="150" height="180px">
                                @else
                                    <img src="{{teacherNOImage()}}" alt="Admin" class="rounded-circle" width="150">
                                @endif
                                <div class="mt-3">
                                    <h4>{{$management->name}}</h4>
                                    <p class="text-secondary mb-1">{{$management->designation->name ?? '----'}}</p>
                                    <p class="text-muted font-size-sm">{{$management->phone}}</p>
                                    <button class="btn btn-primary">Follow</button>
                                    <button class="btn btn-outline-primary">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">

                    </div>
                </div>
                <div class="col-md-8" style="float: right">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$management->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$management->email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$management->phone}}
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{$management->address}}
                                </div>
                            </div>
                            {{--                            <hr>--}}
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-sm-12">--}}
                            {{--                                    <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                                                                  style="font-size: 20px">Social </i>Information
                                    </h6>
                                    <hr>
                                    <small>Facebook
                                        <a style="float: right" href="{{$management->facebook}}"> <i
                                                class="fa fa-facebook"></i> {{$management->facebook}}</a>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                    <small>Phone
                                        <a style="float: right" href="to:{{$management->phone}}"> <i
                                                class="fa fa-phone"></i> {{$management->phone}}</a>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">

                                    </div>

                                    <small>Whatsapp
                                        <a style="float: right" href="to:{{$management->whatsapp}}"> <i
                                                class="fa fa-whatsapp"></i> {{$management->whatsapp}}</a>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                    <small>Email
                                        <a style="float: right" href="mailto:{{$management->email}}">
                                            <i class="fa fa-mail-bulk"></i> {{$management->email}}</a>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"
                                                                                  style="font-size: 20px">Basic </i>Information
                                    </h6>
                                    <hr>
                                    <small>Blood Group
                                        <span style="float: right" >{{$management->blood->name ?? ''}}</span>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                    <small>Gender
                                        <span style="float: right">{{$management->gender == 1 ? 'male' :($management->gender == 2 ? 'female' :'other')}}</span>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">

                                    </div>

                                    <small>Marital Status
                                        <span style="float: right">{{$management->relationship == 1 ? 'Married' :($management->relationship == 2 ? 'Unmarried' :'Separated')}}</span>

                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                    <small>Date Of Birth
                                        <span style="float: right">{{$management->dob}}</span>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                    <small>Date Of Birth
                                        <span style="float: right">{{$management->dob}}</span>
                                    </small>
                                    <div class="progress mb-3" style="height: 5px">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-8" style="float: right">
                    <div class="card mb-3">
                        <div class="card-body">
                            <br>
                            <br>
                            {!! $management->message !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm > .col, .gutters-sm > [class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        /*.h-100 {*/
        /*    height: 100%!important;*/
        /*}*/
        .shadow-none {
            box-shadow: none !important;
        }
    </style>
@endsection
