<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SchoolWiki - 효율적인 업무 방식 개선을 위한</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.svg">

        <!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">
                                    <p><span>E-mail - schoolworks@nate.com</span></p>
                                </div>
                                <div class="text_wrap">
                                    @if (Route::has('login'))
                                    <p>
                                        @auth
                                        <a href="{{ url('/dashboard') }}">
                                            Dashboard
                                        </a>
                                        @else
                                        <a href="{{ route('login') }}">
                                            <i class="ti-user"></i> Log in
                                        </a>

                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                        Register
                                        </a>
                                        @endif
                                        @endauth
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="img/logo.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">

                                                <li><a href="about-us.html">데모 사이트</a></li>
                                                <li><a href="#">사용 매뉴얼</a>
                                                </li>

                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="hero-area-3 bg-img" style="background-image: url(img/banner/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-end">
                <div class="col-lg-8">
                    <div class="hero-text-content">
                        <h6>- 학교 업무관련 기록을 한 곳에 -</h6>
                        <h3>지금 SchoolWiki를 도입해보세요</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ single_carouse -->


    <!-- About us area -->
    <div class="about-us-area section-padding-100-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- About Text -->
                    <div class="about-us-text mb-50">
                        <h6 class="heading-text">About us</h6>
                        <h2>이 서비스는 학교의 각종 업무 및 필요한 정보를 한 곳에 모아두는 것을 목적으로 하고 있습니다.</h2>
                        <p>업무 담당자가 메신져로 보내온 정보를 다시 찾기가 어려운 경우가 많습니다.</p>
                        <p>모든 단기, 장기, 이벤트성의 업무 기록을 이 곳 SchoolWiki에 기록해 두신다면 효율적이며, 체계적으로 관리가 가능합니다.</p>
                        <p>공개항목과 비공개 항목을 지정하실 수 있어서 민감한 정보는 공개하지 않을 수 있습니다.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us area -->



 <!-- Price Table Area -->
    <div class="price-table-area section-padding-100-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3>가격 정책</h3>
                        {{-- <p>두 달간 무료로 사용해보세요. </p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Price Table -->
                <div class="col-md-6 col-lg-6">
                    <div class="single-price-table border text-center mb-50">
                        <div class="price-icon">
                            <img src="img/post/price2.svg" alt="">
                        </div>
                        <div class="price-heading-title">
                            <h6>무료 정책</h6>
                        </div>
                        <div class="select-thumb"><img src="img/banner/price-1.png" alt=""></div>
                        <div class="price-value">
                            <h5>0원 <span>/ 년</span></h5>
                        </div>
                        <!-- Table Body -->
                        <div class="price-table-body-content">
                            <ul>
                                <li><i class="fa fa-hashtag" aria-hidden="true"></i> 아래 "SchoolWorks"에서 학교용 "SchooLinker"를 구매하시면, 해당
                                    서비스는 무료로 사용하실 수 있습니다.</li>


                            </ul>
                            <!-- Button -->
                            <a href="https://schoolworks.kr" class="boxed-btn5 mt-30">학교용 SchooLinker 구매하러 가기</a>
                        </div>
                    </div>
                </div>

                <!-- Single Price Table -->
                <!-- Single Price Table -->
                <div class="col-md-6 col-lg-6">
                    <div class="single-price-table border text-center  mb-50">
                        <div class="price-icon">
                            <img src="img/post/price1.svg" alt="">
                        </div>
                        <div class="price-heading-title">
                            <h6>유료 정책</h6>
                        </div>
                        <div class="select-thumb"><img src="img/banner/price-1.png" alt=""></div>
                        <div class="price-value">
                            <h5>1만원 <span>/ 년</span></h5>
                        </div>
                        <!-- Table Body -->
                        <div class="price-table-body-content">
                            <ul>
                                <li><i class="fa fa-hashtag" aria-hidden="true"></i> 첫 두 달은 무료로 사용해 보세요.</li>
                                <li><i class="fa fa-hashtag" aria-hidden="true"></i> 두 달이 지난 뒤 학교로 우편이 발송됩니다.</li>


                            </ul>
                            <!-- Button -->
                            <a href="#" class="boxed-btn5 mt-30">유료 가입하기</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Price Table Area -->



    <!-- footer start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-12">
                        <p class="copy_right text-center">
                            All rights reserved by SchoolWorks</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
