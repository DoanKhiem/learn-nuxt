<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/booksto/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 15:28:49 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('backend') }}/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('backend') }}/css/dataTables.bootstrap4.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/responsive.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/fontawesome.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center"></div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    @include('backend.layouts.sidebar')
    <!-- Sidebar END -->
    <!-- TOP Nav Bar -->
    @include('backend.layouts.top-navbar')
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</div>
<!-- Wrapper END -->
<!-- Footer -->
@include('backend.layouts.footer')
<!-- Footer END -->
<!-- color-customizer -->
@include('backend.layouts.colorbox')
<!-- color-customizer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('backend') }}/js/jquery.min.js"></script>
<script src="{{ url('backend') }}/js/popper.min.js"></script>
<script src="{{ url('backend') }}/js/bootstrap.min.js"></script>
<script src="{{ url('backend') }}/js/jquery.dataTables.min.js"></script>
<script src="{{ url('backend') }}/js/dataTables.bootstrap4.min.js"></script>
<!-- Appear JavaScript -->
<script src="{{ url('backend') }}/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="{{ url('backend') }}/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="{{ url('backend') }}/js/waypoints.min.js"></script>
<script src="{{ url('backend') }}/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="{{ url('backend') }}/js/wow.min.js"></script>
<!-- Apexcharts JavaScript -->
<script src="{{ url('backend') }}/js/apexcharts.js"></script>
<!-- Slick JavaScript -->
<script src="{{ url('backend') }}/js/slick.min.js"></script>
<!-- Select2 JavaScript -->
<script src="{{ url('backend') }}/js/select2.min.js"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ url('backend') }}/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ url('backend') }}/js/jquery.magnific-popup.min.js"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ url('backend') }}/js/smooth-scrollbar.js"></script>
<!-- lottie JavaScript -->
<script src="{{ url('backend') }}/js/lottie.js"></script>
<!-- am core JavaScript -->
<script src="{{ url('backend') }}/js/core.js"></script>
<!-- am charts JavaScript -->
<script src="{{ url('backend') }}/js/charts.js"></script>
<!-- am animated JavaScript -->
<script src="{{ url('backend') }}/js/animated.js"></script>
<!-- am kelly JavaScript -->
<script src="{{ url('backend') }}/js/kelly.js"></script>
<!-- am maps JavaScript -->
<script src="{{ url('backend') }}/js/maps.js"></script>
<!-- am worldLow JavaScript -->
<script src="{{ url('backend') }}/js/worldLow.js"></script>
<!-- Raphael-min JavaScript -->
<script src="{{ url('backend') }}/js/raphael-min.js"></script>
<!-- Morris JavaScript -->
<script src="{{ url('backend') }}/js/morris.js"></script>
<!-- Morris min JavaScript -->
<script src="{{ url('backend') }}/js/morris.min.js"></script>
<!-- Flatpicker Js -->
<script src="{{ url('backend') }}/js/flatpickr.js"></script>
<!-- Style Customizer -->
<script src="{{ url('backend') }}/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ url('backend') }}/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="{{ url('backend') }}/js/custom.js"></script>
<!-- Font Awesome JavaScript -->
<script src="{{ url('backend') }}/js/all.min.js"></script>

@yield('js')
</body>


</html>
