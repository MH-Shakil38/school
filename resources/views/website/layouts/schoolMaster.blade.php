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

<!-- Mirrored from ccpc.edu.bd/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 11:43:46 GMT -->
</html>
