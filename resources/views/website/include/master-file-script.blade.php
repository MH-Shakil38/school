<script>
    $(function () {
        $(".demo2").bootstrapNews({
            newsPerPage: 5,
            autoplay: true,
            pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.menu-toggle').click(function(){
            $('.menubar').toggleClass('active');
        });
        // $('nav ul li').click(function(){
        //     $('.submenu').toggleClass('active');
        // });
    });

</script>
<script>
    $('.photoGallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        prevArrow: '.right',
        nextArrow: '.left',
        autoplaySpeed: 3000,
        speed: 1000,
    });
</script>

<script>
    $('.teacherGallery').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: true,
        prevArrow: '.left',
        nextArrow: '.right',
        autoplaySpeed: 3000,
        speed: 1000,
    });
</script>
<script>
    $(window).scroll(function() {
        var scrolling = $(this).scrollTop();
        if (scrolling > 100) {

            $("header").addClass("bg2");
        } else {

            $("header").removeClass("bg2");
        }
    })
</script>
