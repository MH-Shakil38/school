<style>
    .videoGallaryImage {
        position: relative;
    }
    .videoGallaryImage img {
        border: 5px solid #fff;
    }
    .playbutton {
        position: absolute;
        width: 65px;
        height: 65px;
        background-color: #fff;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 30px;
    }
    .playbutton a i{
        line-height: 65px
    }
    .slick-slide{
        height: 195px !important;
        border: 5px solid #fff;
    }
    .lastLink a {
        padding: 5px 10px 5px 0;
        display: block;
    }
    .teacher-slider .slick-track {
        height: 260px;
    }
    .details p {
        font-size: 16px !important;
        text-align: justify;
    }

    .details img {
        max-width: 100%;
    }
    .bg2 .container {
        display: none;
    }
</style>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ccpc.edu.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 11:37:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{url('/')}}" />
    <meta property="og:type" content="Madrasha/School website" />
    <meta property="og:title" content="{{setting()->bn_name}}" />
    <meta property="og:description" content="{!! setting()->bn_name ?? '' !!}" />
    <meta property="og:image" content="{{asset(setting()->logo)}}" />
    @yield('meta')
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{setting()->bn_name}}</title>

    @include('website.include.header-script')
    @yield('css')

</head>
<body>

@include('website.include.header-details')

@include('website.include.marguee')


@yield('content')



@include('website.include.footer-details')
<script>
    function shareOnFacebook() {
        // Define the URL you want to share
        var urlToShare = 'https://example.com/your-post-url';

        // Open the Facebook Share Dialog
        FB.ui({
            method: 'share',
            href: urlToShare,
        }, function(response){});
    }
</script>
@yield('js')
@include('website.include.footer-script')
@include('website.include.master-file-script')
@yield('script')
</body>


<style>

    @media screen and (min-width: 0px) and (max-width: 600px){
        nav.navbar.navbar-default{
            float: left;
        }
        .slick-track {
            height: 9px !important;
        }

        .user-image{
            height: 130px !important;
            border: 2px solid #008000;
        }
             .teacher-slider .slick-track{
                 height: 260px !important;
             }
        .user-heading.bg-danger.text-center {
            position: absolute;
            width: 7.2%;
            font-size: 10px;
            bottom: -5px;
            min-height: 42px !important;
        }
        .teacher-slider .slick-track {
            height: 260px;
        }
        .teacher-slider .slick-track {
            height: unset;
        }
        img.-mg-fulid.w-100.user-image {
            height: 166px;
        }
        .page-content.teacher-slider {
            height: 180px !important;
        }

        .teacher-slider .slick-track {
            height: 0px !important;
        }
        .slick-track {
            height: 9px !important;
        }
        .user-image{
            height: 174px;
            border: 2px solid #008000;
        }
        .teacher-slider .slick-track{
            height: unset !important;
        }
        .user-heading.bg-danger.text-center {
            position: absolute;
            width: 31.2%;
            font-size: 10px;
            bottom: 4px;
            min-height: 140px;
        }
        .user-image{
            height: 174px !important;
            border: 2px solid #008000;
        }
        .teacher-slider .slick-track {
            height: 260px;
        }
        .teacher-slider .slick-track {
            height: unset;
        }
        img.-mg-fulid.w-100.user-image {
            height: 166px;
        }
        .page-content.teacher-slider {
            height: 180px !important;
        }
    }
    .user-heading.bg-danger.text-center {
        position: absolute;
        width: 7.4%;
        font-size: 10px;
        bottom: -5px;
        min-height: 42px !important;
    }
    .user-image{
        height: 174px !important;
        border: 2px solid #008000;
    }
    /*# Tablet*/


    /*# Desktop*/
    @media  only screen and (min-width: 788px){
        .teacher-slider .slick-track {
            height: 221px;
        }
    }

   /* # Huge*/
    @media  only screen and (min-width: 1280px){

    }



</style>
<!-- Mirrored from ccpc.edu.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 11:43:46 GMT -->
</html>
