<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('public/admin/js/jquery.js') }}"></script>
<script src="{{ asset('public/admin/js/bootstrap.bundle.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ asset('public/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('public/admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('public/admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ asset('public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('public/admin/js/owl.carousel.js') }}" ></script>
<script src="{{ asset('public/admin/js/jquery.customSelect.min.js') }}" ></script>
<script src="{{ asset('public/admin/js/respond.min.js') }}" ></script>

<script src="{{ asset('public/admin/js/slidebars.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

<!--common script for all pages-->
<script src="{{ asset('public/admin/js/common-scripts5e1f.js') }}?v=2"></script>

<!--script for this page-->
{{--<script src="{{ asset('public/admin/js/sparkline-chart.js') }}"></script>--}}
<script src="{{ asset('public/admin/js/easy-pie-chart.js') }}"></script>
<script src="{{ asset('public/admin/js/count.js') }}"></script>

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>
