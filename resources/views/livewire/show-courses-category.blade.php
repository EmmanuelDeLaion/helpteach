<div>

    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    </head>


    <div
        class="slider owl-carousel  mt-24 grid gap-4 grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-2 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8  ">

        @foreach ($courses as $course)
            <x-course-card :course="$course" />
        @endforeach
        
    </div>


    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true
        });

    </script>


</div>
