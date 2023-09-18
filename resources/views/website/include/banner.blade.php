    <!-- Navbar -->

    <div
        class="p-5 text-center bg-image"
        style="
      background-image: url({{asset(banner()->image)}});
      height: 500px;
      width: 100%;
      /*background-size: cover;*/
      background-repeat: round;
    ">
        @if(isset(banner()->heading))
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); position: relative;bottom: -231px;color: #ffffff;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">{{banner()->heading}}</h1>
                    <h4 class="mb-3">{{banner()->title}}</h4>
                    <a  class="btn btn-outline-danger btn-lg" href="#!" role="button"style="color: white;font-weight: bold;"
                    >Read More</a
                    >
                </div>
            </div>
        </div>
        @endif
    </div>
    <style>
        @media only screen and (max-width: 600px) {
            .bg-image {
               height: 281px !important;
            }
            .mask{
            bottom: -153px;
            color: #ffffff;
            }
        }
    </style>
    <!-- Background image -->


<br>
