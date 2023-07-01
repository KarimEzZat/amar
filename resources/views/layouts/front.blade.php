<!DOCTYPE html>
<html dir="rtl" lang="ar" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <!-- Author Meta -->
    <meta property="og:locale" content="ar_AR"/>
    <meta property="og:type" content="article"/>
    <meta name="author" content="شركة خدمات العزل بالفوم والعزل الحراري وعزل الخزانات والاسطح بالرياض">
    <!-- Meta Description -->
    <meta name="description"
          content="شركة مورةافضل شركات عزل الفوم بالرياض لجميع خدمات العزل بالفوم (بولى يوريثان+بولى يوريا+بولى ايثلين) والعزل الحراري وعزل الخزانات والاسطح بالرياض يمكنك التواصل معنا على 0566928473">
    <meta property="og:title" content="شركة عزل فوم بالرياض 0566928473 بولي يوريثان بالضمان عزل معتمد"/>
    <meta property="og:description"
          content="تتشرف شركة مورة لعزل الفوم بالرياض بتقديم أجود وأقوى أنواع الفوم المُنتج خصيصاً لمقاومة التسربات المائية والحرارية بتميز ليس له مثيل."/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content="شركة مورةالرياض"/>
    <meta property="og:image:secure_url" content=""/>

    <meta property="og:image:width" content="764"/>
    <meta property="og:image:height" content="444"/>
    <meta property="og:image:alt" content="شركة عزل فوم بالرياض"/>
    <meta property="og:image:type" content="image/png"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="شركة عزل فوم بالرياض 0549362523 بولي يوريثان بالضمان عزل معتمد"/>
    <meta name="twitter:description"
          content="تتشرف شركة مورة لعزل الفوم بالرياض بتقديم أجود وأقوى أنواع الفوم المُنتج خصيصاً لمقاومة التسربات المائية والحرارية بتميز ليس له مثيل."/>
    <meta name="twitter:image" content=""/>
    <!-- Meta Keyword -->
    <meta name="keywords"
          content="عزل فوم , عزل حراري , افضل شركة لعزل الفوم والعزل الحراري بالرياض, عزل فوم الرياض, عزل فوم بالرياض, عزل بولي يوريثان بالياض, عزل فوم بالخرج, عزل اسطح بالرياض, عزل خزانات بالرياض, عزل اسطح وخزانات الرياض, عزل مائي, عزل مائي بالرياض">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>شركة خدمات عزل فوم بولي يوريثان بالرياض - 0549362523</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <link rel="icon" href="{{ asset('public/front-end/assets/img/fav.png') }}">

    <!-- CSS Files -->
    <!-- linearicons Icon font -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/linearicons.css')}}">
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/font-awesome.min.css')}}">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/bootstrap-rtl.css')}}">
    <!-- animate -->
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/main.css')}}">
    <!-- media-queries (Responsive File) -->
    <link rel="stylesheet" href="{{asset('public/front-end/assets/css/responsive.css')}}">
</head>

<body id="body">

{{--<!-- Start Preloader Area -->--}}
{{--<div class="preloader-area">--}}
{{--    <div class="loader"></div>--}}
{{--</div>--}}
{{--<!-- End Preloader Area -->--}}


<!-- Start Header Area -->
<header id="header" class="header_area">
    <div class="container py-3">
        <div class="row align-items-center justify-content-between">
            <div class="logo_area">
                <!-- Logo image -->
                <a href="{{ route('welcome') }}"><img src="{{asset('public/front-end/assets/img/logo.png')}}"
                                                      alt="logo"></a>
            </div>
            <div class="whats-btn d-flex">

                <div class="location d-flex align-items-center">
                    <i class="fa fa-map-marker ml-2" style="color: #e45447"></i>
                    <p class="mb-0">
                        {{ $companies->first()->location }}
                    </p>
                </div>
                <div>
                    <a target="-_blank" class="phone-cell ml-3" href="tel:0549362523" title="اتصل بنا"><i
                            class="fa fa-phone"></i></a>
                    {!! WhatsappBtn::make($companies->first()->phone, 'شركة مورة لخدمات العزل بالفوم وعزل الاسطح والخزانات بالرياض'); !!}
                </div>
            </div>
        </div>
    </div>

</header>
<!-- End Header Area -->


<!-- start Banner Area -->
<section class="home-banner-area">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center">
            <div class="banner-content col-lg-6 col-md-12 justify-content-center ">
                <div class="me">أهـلا بكم</div>
                <h1>{{ $companies->first()->name }}</h1>
                <div class="designation mb-50">
                    سنوات طويله في خدمات
                    <span class="designer">العزل</span>
                    و العمل في
                    <span class="developer">الفوم</span> بالرياض
                </div>
                <a href="#footer" class="primary-btn transition" data-text="تواصل معنا">
                    <span>تواصل معنا</span>
                </a>
            </div>

            <div class="banner-img col-lg-6 col-md-6 align-self-end">
                <img class="img-fluid" src="{{asset('public/front-end/assets/img/banner-img.png')}}"
                     alt="عزل فوم الرياض">
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@yield('content')

<!-- start footer Area -->
<footer class="footer-area" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer-top flex-column">
                    <div class="footer-logo text-center">
                        <a href="{{ route('welcome') }}">
                            <img src="{{ asset('public/front-end/assets/img/footer-logo.png') }}" alt="عزل فوم الرياض">
                        </a>
                        <h4>تواصل معنا</h4>
                    </div>
                    <div class="footer-social text-center">
                        <a href="{{ $companies->first()->facebook }}" target="_blank"><i
                                class="fa fa-facebook transition"></i></a>
                        <a href="{{ $companies->first()->twitter }}" target="_blank"><i
                                class="fa fa-twitter transition"></i></a>
                        <a target="-_blank" class="phone-cell ml-3" href="tel:0549362523" title="اتصل بنا"><i
                                class="fa fa-phone"></i></a>
                        {!! WhatsappBtn::make($companies->first()->phone, 'شركة مورة لخدمات العزل بالفوم وعزل الاسطح والخزانات بالرياض'); !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer-bottom text-center justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                كل الحقوق محفوظه <i class="fa fa-heart-o" aria-hidden="true"></i> برمجة وتصميم <a
                    href="https://www.facebook.com/karim.ezzt.31"
                    target="_blank">كريم عزت</a>
            </p>
        </div>
    </div>
</footer>
<!-- End footer Area -->


<!-- Start Scroll to Top Area  -->
<div class="transition" id="back-top">
    <a title="Go to Top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
</div>
<!-- End Scroll to Top Area -->
<!-- Essential jQuery Plugins -->

<!-- Main jQuery -->
<script src="{{asset('public/front-end/assets/js/jquery-2.2.4.min.js')}}"></script>
<!-- Twitter Bootstrap -->
<script src="{{asset('public/front-end/assets/js/bootstrap.min.js')}}"></script>
<!-- Custom Functions -->
<script src="{{asset('public/front-end/assets/js/main.js')}}"></script>
</body>

</html>
