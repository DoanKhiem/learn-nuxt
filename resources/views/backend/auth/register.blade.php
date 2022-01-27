<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/booksto/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 15:30:40 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng ký quản lý</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('backend') }}/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ url('backend') }}/css/responsive.css">
</head>
<body>
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">
    </div>
</div>
<!-- loader END -->
<!-- Sign in Start -->
<section class="sign-in-page">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 align-self-center page-content rounded">
                <div class="row m-0">
                    <div class="col-sm-12 sign-in-page-data">
                        <div class="sign-in-from bg-primary rounded">
                            <h3 class="mb-0 text-center text-white">Đăng Ký</h3>
                            <p class="text-center text-white">Điền thông tin đăng ký của bạn tại đây để đăng ký</p>
                            <form class="mt-4 form-text" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Tên đầy đủ của bạn</label>
                                    <input type="text" name="name" class="form-control mb-0" id="exampleInputName1" placeholder="Nhập tên đầy đủ của bạn">

                                </div>
                                @if ($errors->has('name'))
                                    <label class="iq-bg-danger pl-2 pr-2 rounded d-inline-block">{{ $errors->first('name') }}</label>
                                @endif
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputName2">Tên</label>--}}
{{--                                    <input type="email" name="last_name" class="form-control mb-0" id="exampleInputName2" placeholder="Nhập tên">--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email</label>
                                    <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Nhập email">

                                </div>
                                @if ($errors->has('email'))
                                    <label class="iq-bg-danger pl-2 pr-2 rounded d-inline-block">{{ $errors->first('email') }}</label>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mật khẩu</label>
                                    <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Nhập mật khẩu">

                                </div>
                                @if ($errors->has('password'))
                                    <label class="iq-bg-danger pl-2 pr-2 rounded d-inline-block">{{ $errors->first('password') }}</label>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputPassword3">Xác nhận mật khẩu</label>
                                    <input type="password" name="confirm_password" class="form-control mb-0" id="exampleInputPassword3" placeholder="Nhập xác nhận mật khẩu ">

                                </div>
                                @if ($errors->has('confirm_password'))
                                    <label class="iq-bg-danger pl-2 pr-2 rounded d-inline-block">{{ $errors->first('confirm_password') }}</label>
                                @endif
{{--                                <div class="d-inline-block w-100">--}}
{{--                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">--}}
{{--                                        <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                        <label class="custom-control-label" for="customCheck1">I accept <a href="#" class="text-light">Terms and Conditions</a></label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="sign-info text-center">
                                    <button type="submit" class="btn btn-white d-block w-100 mb-2">Đăng Ký</button>
                                    <span class="text-dark d-inline-block line-height-2">Đã Có Tài Khoản ? <a href="{{ route('admin.login') }}" class="text-white">Đăng Nhập</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('backend') }}/js/jquery.min.js"></script>
<script src="{{ url('backend') }}/js/popper.min.js"></script>
<script src="{{ url('backend') }}/js/bootstrap.min.js"></script>
<!-- Appear JavaScript -->
<script src="{{ url('backend') }}/js/jquery.appear.js"></script>
<!-- Countdown JavaScript -->
<script src="{{ url('backend') }}/js/countdown.min.js"></script>
<!-- Counterup JavaScript -->
<script src="{{ url('backend') }}/js/waypoints.min.js"></script>
<script src="{{ url('backend') }}/js/jquery.counterup.min.js"></script>
<!-- Wow JavaScript -->
<script src="{{ url('backend') }}/js/wow.min.js"></script>
<!-- lottie JavaScript -->
<script src="{{ url('backend') }}/js/lottie.js"></script>
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
<!-- Style Customizer -->
<script src="{{ url('backend') }}/js/style-customizer.js"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ url('backend') }}/js/chart-custom.js"></script>
<!-- Custom JavaScript -->
<script src="{{ url('backend') }}/js/custom.js"></script>
</body>

<!-- Mirrored from templates.iqonic.design/booksto/html/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Jan 2022 15:30:40 GMT -->
</html>
