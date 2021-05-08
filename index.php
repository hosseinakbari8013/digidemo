<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/plugins/Bootstrap/css/bootstrap.min.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/css/style.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/css/responsive.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/icon/font-awsoem/css/fontawesome-all.min.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/plugins/OwlCarousel/assets/owl.theme.default.min.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/plugins/OwlCarousel/assets/owl.carousel.min.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/swiper/swiper-bundle.css?v=2.1.<?= rand(100000,10000000)?>">
    <link rel="stylesheet" href="assets/swiper/swiper-bundle.min.css?v=2.1.<?= rand(100000,10000000)?>">
</head>
<body>
<div class="loading-page">
    <div class="loading-title">
        <span class="fa fa-spinner fa-spin fa-2x"></span>
    </div>
</div>
<a href="#" class="w-100 top_hero d-block"></a>
<div class="w-100">
    <header dir="rtl" class="header-top bg-white container-fluid" id="header-top">
        <div class="row align-items-center">
            <a href="" class="brand-header d-none d-lg-block">
                <img src="image/Digikala-1.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
            <div class="col-md-5 col-sm-6 col-8 pl-0">
                <div class="input-group header-search" dir="ltr">
                    <input type="text" class="form-control" placeholder="جستجو در دیجی کالا...">
                    <div class="input-group-append ">
                        <label for="" class="btn btn-secondary m-0"> <span class="far fa-search"></span></label>
                    </div>
                </div>
            </div>
            <div class="nav mr-auto">
                <ul class="navbar nav pr-0">
                    <li><a href="#" class="btn btn-outline-dark enter-btn"><span class="far fa-user pl-md-2"></span><span class="d-none d-md-inline-block">ورود به حساب کاربری </span></a>
                    </li>
                    <li><span class="px-2" style="color: #c3c3c3">|</span></li>
                    <li><a href="" class="text-dark"> <span class="far fa-shopping-cart"></span></a></li>
                </ul>
            </div>
        </div>
    </header>
    <nav dir="rtl" class="nav-top bg-white w-100" id="header-nav">
        <nav class="p-1 p-xl-0 nav-opacity p-sm-0 text-right d-flex">
            <button data-trigger="#navbar_main" class="d-lg-none d-block btn  text-dark" type="button"><span
                        class="fa fa-bars"></span></button>
            <a href="" class="brand-header d-block d-lg-none mx-auto text-center">
                <img src="image/Digikala-1.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </nav>

        <button class="btn-c d-lg-none"></button>
        <nav id="navbar_main" class="mobile-offcanvas nav-opacity navbar navbar-expand-lg p-0 " >
            <ul class="navbar-nav nav-header text-right p-0">
                <li class="nav-item d-lg-none d-block ">
                    <a href="" class="nav-link brand-header  d-block  mx-auto text-center">
                        <img src="image/Digikala-1.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
                    </a>
                </li>
                <hr class="w-100 hr d-block d-lg-none">
                <li class="nav-item dropdown dropdown-mega">
                    <a data-timeout="2" class="nav-link dropdown-toggle hover-dropdown d-inline-block " href="#"
                       data-toggle="dropdown"><span class="fa fa-bars fa-1x px-3 px-lg-0 d-inline-block"></span> دسته
                        بندی کالا ها </a>
                    <span class="fa fa-angle-down d-lg-none d-inline-block float-left  pl-4 pt-2 dropdown-toggle"
                          href="#" data-toggle="dropdown"></span>
                    <div class="dropdown-menu dropdown-menu-2 text-right border-0 rounded-0 bg-gray w-100  "
                         data-timeout="2">
                        <div class="row m-0">
                            <div class="col-lg-2 p-0">
                                <ul class="nav mega-list p-0 d-block">
                                    <li class="active" data-target="electronic"><span class="far fa-laptop"></span><span>کالای دیجیتال</span></li>
                                    <li data-target="tools"><span class="far fa-laptop"></span><span>خودرو و ابزار</span></li>
                                    <li data-target="fashion"><span class="far fa-laptop"></span><span>مد و پوشاک</span></li>
                                    <li data-target="beauty"><span class="far fa-laptop"></span><span>زیبایی و سلامت</span></li>
                                    <li data-target="home"><span class="far fa-laptop"></span><span>خانه و اشپزخانه</span></li>
                                    <li data-target="book"><span class="far fa-laptop"></span><span>کتاب،لوارم تحریر و هنر</span></li>
                                    <li data-target="game"><span class="far fa-laptop"></span><span>اسباب بازی، کوذک و نوجوان</span></li>
                                    <li data-target="sport"><span class="far fa-laptop"></span><span>ورزش و سفر</span></li>
                                    <li data-target="eat"><span class="far fa-laptop"></span><span>خوردنی و آشامیدنی</span></li>
                                </ul>
                            </div>
                            <div class="col-10 mega-product  h-100">
                                <div class="w-100 mega-item" id="electronic">
                                    <div class="row m-0">
                                        <div class="col-9">
                                            <div class="w-100">
                                                <a href="#" class="menu-item" >   همه ی دسته بندی های کالای دیجیتال<span class="fa fa-angle-left p-1"></span></a>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <a href="#" class="menu-item-main" >لوازم جانبی گوشی<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >کیف و کاور  گوشی</a>
                                                    <a href="#" class="menu-item" >پاور بانک گوشی</a>
                                                    <a href="#" class="menu-item" >پایه نگهدارنده گوشی</a>
                                                    <a href="#" class="menu-item-main" >گوشی موبایل<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >اپل</a>
                                                    <a href="#" class="menu-item" >شیاومی</a>
                                                    <a href="#" class="menu-item" >هوای</a>
                                                    <a href="#" class="menu-item" >آنر</a>
                                                    <a href="#" class="menu-item" >نوکیا</a>
                                                    <a href="#" class="menu-item-main" >واقعیت مجازی <span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item-main" >مچ بند و ساعت هوشمند<span class="fa fa-angle-left p-1"></span></a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="menu-item-main" >لوازم جانبی گوشی<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >کیف و کاور  گوشی</a>
                                                    <a href="#" class="menu-item" >پاور بانک گوشی</a>
                                                    <a href="#" class="menu-item" >پایه نگهدارنده گوشی</a>
                                                    <a href="#" class="menu-item-main" >گوشی موبایل<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >اپل</a>
                                                    <a href="#" class="menu-item" >شیاومی</a>
                                                    <a href="#" class="menu-item" >هوای</a>
                                                    <a href="#" class="menu-item" >آنر</a>
                                                    <a href="#" class="menu-item" >نوکیا</a>
                                                    <a href="#" class="menu-item-main" >واقعیت مجازی <span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item-main" >مچ بند و ساعت هوشمند<span class="fa fa-angle-left p-1"></span></a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="menu-item-main" >لوازم جانبی گوشی<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >کیف و کاور  گوشی</a>
                                                    <a href="#" class="menu-item" >پاور بانک گوشی</a>
                                                    <a href="#" class="menu-item" >پایه نگهدارنده گوشی</a>
                                                    <a href="#" class="menu-item-main" >گوشی موبایل<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >اپل</a>
                                                    <a href="#" class="menu-item" >شیاومی</a>
                                                    <a href="#" class="menu-item" >هوای</a>
                                                    <a href="#" class="menu-item" >آنر</a>
                                                    <a href="#" class="menu-item" >نوکیا</a>
                                                    <a href="#" class="menu-item-main" >واقعیت مجازی <span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item-main" >مچ بند و ساعت هوشمند<span class="fa fa-angle-left p-1"></span></a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="#" class="menu-item-main" >لوازم جانبی گوشی<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >کیف و کاور  گوشی</a>
                                                    <a href="#" class="menu-item" >پاور بانک گوشی</a>
                                                    <a href="#" class="menu-item" >پایه نگهدارنده گوشی</a>
                                                    <a href="#" class="menu-item-main" >گوشی موبایل<span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item" >اپل</a>
                                                    <a href="#" class="menu-item" >شیاومی</a>
                                                    <a href="#" class="menu-item" >هوای</a>
                                                    <a href="#" class="menu-item" >آنر</a>
                                                    <a href="#" class="menu-item" >نوکیا</a>
                                                    <a href="#" class="menu-item-main" >واقعیت مجازی <span class="fa fa-angle-left p-1"></span></a>
                                                    <a href="#" class="menu-item-main" >مچ بند و ساعت هوشمند<span class="fa fa-angle-left p-1"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <a href="" class="pt-4 d-block pb-4">
                                                <img class="w-100 rounded-more" src="image/d81284531e5f3afe5210e870ed0a960ff5c49777_1608472540.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                            </a>
                                            <div class="w-100 pt-5 pl-2 pr-3">
                                                <p class="text-10 mb-1">برند های ویژه</p>
                                                <div class="row">
                                                    <div class="col p-1">
                                                        <a href="">
                                                            <img class="rounded-more border w-100" src="image/120407353.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col p-1">
                                                        <a href="">
                                                            <img class="rounded-more border w-100" src="image/120407353.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-4 p-1">
                                                        <a href="">
                                                            <img class="rounded-more border w-100" src="image/120407353.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="w-100 mega-item" id="tools">tools</div>
                                <div class="w-100 mega-item" id="fashion">fashion</div>
                                <div class="w-100 mega-item" id="beauty">beauty</div>
                                <div class="w-100 mega-item" id="home">home</div>
                                <div class="w-100 mega-item" id="book">book</div>
                                <div class="w-100 mega-item" id="game">game</div>
                                <div class="w-100 mega-item" id="sport">sport</div>
                                <div class="w-100 mega-item" id="eat">eat</div>
                            </div>
                        </div>
                    </div>
                </li>
                <hr class="w-100 hr d-block d-lg-none">
                <li class="nav-item"><a class="nav-link" href="#"><span
                                class="far fa-shopping-basket fa-1x px-3 px-lg-0 d-inline-block"></span> سوپر کارکت </a>
                </li>
                <li class="nav-item dropdown">
                    <a data-timeout="3" class="nav-link hover-dropdown dropdown-toggle d-inline-block" href="#"
                       data-toggle="dropdown"><span class="far fa-percent fa-1x px-3 px-lg-0 d-inline-block"></span>
                        تخفیف ها و پیشنهاد ها </a>
                    <span class="fa fa-angle-down  d-lg-none d-inline-block float-left pl-4 pt-2 dropdown-toggle"
                          data-toggle="dropdown"></span>
                    <ul data-timeout="3" class="dropdown-menu text-right border-0 rounded-0 bg-gray w-100">
                        <li><a class="dropdown-item" href="#"> مشاهده همه پیشنهاد ها </a></li>
                        <li><a class="dropdown-item" href="#"> پر فروش ترین کالا ها</a></li>
                        <li><a class="dropdown-item" href="#">کالا های شگفت انگیز </a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="far fa-badge-check fa-1x px-3 px-lg-0 d-inline-block"></span> دیجی کالا من </a>
                </li>
                <li class="nav-item dropdown dropdown-mega ">
                    <a data-timeout="4" class="nav-link dropdown-toggle hover-dropdown d-inline-block " href="#" data-toggle="dropdown">
                        <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span>
                        دیجی پلاس
                    </a>
                    <div class="dropdown-menu small text-right border-0 rounded-0 bg-gray w-100 m-0 py-lg-3 px-2 py-0 " data-timeout="4">
                        <div class="w-100 mega-plus">

                            <div class="row px-3">
                                <div class="col">
                                    <p class="text-8 m-0 pb-1">خدمات ویژه کاربران یجی پلاس</p>
                                    <p class="text-8 m-0 pb-1">ارسال رایگان بدون محدودیت قیمت، هدیه نقدی و بازگشت کالا تا ۳۰ روز پس از تحویل</p>
                                    <a href="#" class="pb-2 d-block" >اطلاعات بیشتر وعضویت<span class="fa fa-angle-left text-cyan p-1"></span></a>
                                    <hr class="hr w-100 p-0 m-0">
                                    <p class="text-8 m-0 pt-2">کالا های دیجی پلاس</p>
                                </div>
                                <div class="col">
                                    <a href="" >
                                        <img class="w-100 rounded-more " src="image/d81284531e5f3afe5210e870ed0a960ff5c49777_1608472540.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <span class="far fa-trophy fa-1x px-3 px-lg-0 d-inline-block"></span>
                        دیجی کلاب
                    </a></li>
                <li class="nav-item"><a class="nav-link pr-5 pr-lg-0" href="#">سوالی دارید؟</a></li>
                <li class="nav-item"><a class="nav-link pr-5 pr-lg-0" href="#"> فروشنده شوید </a></li>
            </ul>
            <div class="nav mr-auto d-none d-lg-block">
                    <span class="nav-select-city">
                        شهر و استان خود را انتخاب کنید
                        <span class="far fa-map-marker-alt pl-3"></span>
                    </span>
            </div>
        </nav>
    </nav>
</div>
<div class="container-fluid px-md-0 px-2 pt-2">
    <a href="#" class="w-100 back-image  d-block px-md-3">
        <img class="w-100 rounded-more top-ad-img" src="image/general/top-img.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>" alt="">
    </a>
</div>
<section class="container-fluid">
    <div class="row">
        <div class="col-md-8 pr-md-3 pl-md-0 px-2 pt-3">
            <div class="owl-carousel owl-theme position-relative owl-top h-100">
                <div class="overflow-hidden">
                    <img class="w-100 rounded-more" src="image/general/slider1.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>"
                         alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-100 rounded-more" src="image/general/slider5.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>"
                         alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-100 rounded-more" src="image/general/slider2.jpg?v=2.1.<?= rand(100000,10000000)?>?v=2.1.<?= rand(100000,10000000)?>"
                         alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-100 rounded-more" src="image/general/slider3.jpg?v=2.1.<?= rand(100000,10000000)?>"
                         alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-100 rounded-more" src="image/general/slider4.jpg?v=2.1.<?= rand(100000,10000000)?>"
                         alt="">
                </div>
                <div class="overflow-hidden">
                    <img class="w-100 rounded-more" src="image/330b6c6d0e84ac18571faecffce7f0ffbb142aa0_1608399921.jpg?v=2.1.<?= rand(100000,10000000)?>"
                         alt="">
                </div>
            </div>
        </div>
        <div class="col-md-4 px-3  d-none d-md-block pt-2">
            <a href="#" class="pt-2 d-block">
                <img class="w-100 rounded-more overflow-hidden" src="image/general/off.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
            <a href="#" class="pt-3 d-block">
                <img class="w-100 rounded-more overflow-hidden" src="image/general/giftmw.gif" alt="">
            </a>
        </div>
    </div>
</section>
<section class="container-fluid py-3">
    <div class="row slider-grocery py-4">
        <div class="px-md-5 pt-5 ws-slider d-n">
            <div class="w-100 text-center pr-md-3">
                <img class="w-100" src="image/93723234.png" alt="">
                <div class="w-100 text-center pt-5">
                    <a href="" class="btn  btn-outline-light">
                        مشاهده همه <span class="fa fa-angle-left"> </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="pl-lg-4 pl-md-2 w-slider" >
            <div class="owl-carousel owl-theme owl-product d-flex align-content-center align-items-center h-100">
                <div>
                    <div class="w-100 h-100 text-center pr-4">
                        <img class="w-100" src="image/93723234.png" alt="">
                        <div class="w-100 text-right pt-3">
                            <a href="" class="btn shadow-none text-light ">
                                مشاهده همه <span class="fa fa-angle-left"> </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0  d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0  d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-3 col-6 py-md-0 py-2  px-2">
            <a href="#">
                <img class="w-100 rounded-more " src="image/4786b3a37fc112e9f8663051558806e78d9364ef_1612694311.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="loading">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-6 py-md-0 py-2 px-2">
            <a href="#">
                <img class="w-100 rounded-more" src="image/995aca945cac65fd0c424278e9653fd279df2e27_1611484195.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="loading">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-12 py-md-0 py-2 px-2 d-sm-block d-none ">
            <a href="#">
                <img class="w-100 rounded-more" src="image/51c70604872657b31eaa8c73697e77604f0360ca_1612363961.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="loading">
            </a>
        </div>
        <div class="col-sm-6 col-md-3 col-12 py-md-0 py-2 px-2 d-sm-block d-none">
            <a href="#">
                <img class="w-100 rounded-more" src="image/f925d9ce3095224977a570c11b1f2ceaea4e68e5_1612162117.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="loading">
            </a>
        </div>
    </div>
</section>
<section class="container-fluid py-3">
    <div class="row slider-cloth py-4">
        <div class="px-md-5 pt-5 ws-slider d-n">
            <div class="w-100 text-center pr-md-3">
                <img class="w-100" src="image/b6c724a0.png" alt="">
                <div class="w-100 text-center pt-5">
                    <a href="" class="btn  btn-outline-light">
                        مشاهده همه <span class="fa fa-angle-left"> </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="pl-lg-4 pl-md-2 w-slider" >
            <div class="owl-carousel owl-theme owl-product d-flex align-content-center align-items-center h-100">
                <div>
                    <div class="w-100 h-100 text-center pr-4">
                        <img class="w-100" src="image/b6c724a0.png" alt="">
                        <div class="w-100 text-right pt-3">
                            <a href="" class="btn shadow-none text-light ">
                                مشاهده همه <span class="fa fa-angle-left"> </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0  d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0 d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>
                <div>
                    <div class="w-100 h-100 px-3 bg-white rounded-more">
                        <img  class="w-100 px-lg-5 px-md-4 px-sm-3 px-2 pt-md-5 pt-3" src="image/121560275.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        <p class="pt-2 pb-5">شنیسل مرغ فارسی-400گرم</p>
                        <p> <span class="fa fa-asterisk text-purple fa-1x px-3 px-lg-0 d-inline-block"></span> 1200تومان هدیه نقدی
                        </p>
                        <p class="text-left m-0 pb-1">
                            <span class="text-left text-muted align-baseline" style="text-decoration: line-through #737373">43800</span>
                            <span class="text-left rounded-pill bg-danger text-white px-2">38%</span>
                        </p>
                        <p class="text-left m-0 pb-3"> <span class="font-weight-bolder">27300</span>تومان</p>
                        <p class="text-left text-muted m-0  d-md-block d-none">10:07:51 <span class="far fa-clock"></span> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="container-fluid pt-md-3">
    <div class="row">
        <div class="col-sm-6 overflow-hidden">
            <a class="overflow-hidden" href="">
                <img class="w-100 rounded-more py-sm-0 py-2" src="image/5c27e5bfb9d36237d11301a7da89d70bc069b629_1612874298.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
        <div class="col-sm-6 overflow-hidden">
            <a class="overflow-hidden" href="">
                <img class="w-100 rounded-more py-sm-0 py-2" src="image/pril.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
    </div>
</section>
<section class="container-fluid px-4 py-3 text-center">
    <div class="row">
        <div class="col-md-10 px-md-1 px-2">
            <div class="w-100 h-100  bg-swiper rounded_between position-relative">
                <div class="row px-md-5 px-2">
                    <div class="w-auto pr-0">
                        <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title"> گوشی موبایل</p>
                    </div>
                    <div class=" pr-md-3 d-md-block d-none" style="width: calc(100% - 129px)">
                        <div class="w-100 border-rest">
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiper-product swiper-phone">
                    <div class="swiper-wrapper pt-md-4">
                        <div class="swiper-slide">
                            <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                                <div class="w-100 px-6">
                                    <img class="w-100" src="image/phone.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                </div>
                                <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                                <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                                <div class="w-100 px-6">
                                    <img class="w-100 " src="image/phonefe.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                </div>
                                <p class="text-height">گوشی موبایل سامسونگ مدل Galaxy S20 FE SM-G780F/DS </p>
                                <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                                <div class="w-100 px-6">
                                    <img class="w-100" src="image/phoneremdi.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                </div>
                                <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                                <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                                <div class="w-100 px-6">
                                    <img class="w-100 h-100" src="image/phone1.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                </div>
                                <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                                <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                                <div class="w-100 px-6">
                                    <img class="w-100" src="image/phone.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                </div>
                                <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                                <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                                <div class="w-100 px-6">
                                    <img class="w-100 " src="image/phone1.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                                </div>
                                <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                                <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                            </div>
                        </div>
                    </div>
                    <div class="btn swiper-button-prev  d-md-inline-block d-none border_left rotated"></div>
                    <div class="btn swiper-button-next  d-md-inline-block d-none border_right rotated"></div>
                    <div class="swiper-scrollbar d-md-none d-block text-success"></div>
                </div>
            </div>
        </div>
        <div class="col-md-2 px-2 d-n">
            <div class="w-100 h-100 text-center bg-white p-2 border-cyan rounded_between">
                <p>پیشنهاد لحظه ای برای شما</p>
                <hr class="w-100">
                <img class="w-100" src="image/120407353.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                <p class="text-right pt-3"> مسواک سسود این مدل repair protect</p>
                <p class="text-left btn pt-3"><span class="font-weight-bolder ">18,000</span> تومان</p>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-swiper">
    <div class="w-100">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title"> گوشی موبایل</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 129px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container dd swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-2">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/phone.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/phonefe.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل سامسونگ مدل Galaxy S20 FE SM-G780F/DS </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/phoneremdi.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/phone1.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/phone.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/phone1.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی سامسونگ مدل Galexy sm-sdfff دوسیم کارته</p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left rotated"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right rotated"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<hr class="w-100 hr d-md-none d-block">
<section class="container-fluid pt-md-4 pb-md-3">
    <div class="row">
        <div class="col-md-3 col-6 px-2 overflow-hidden">
            <a href="">
                <img class="w-100 rounded-more" src="image/76998daf25428efd1a62130b631abfe65b2ceea8_1612288934.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>

        <div class="col-md-3 col-6 px-2 overflow-hidden">
            <a href="">
                 <img class="w-100 rounded-more" src="image/bc928cad36c9cc9aed866ec4de30dfd9f5e50ec7_1607016116.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 px-2 overflow-hidden pt-md-0 pt-2">
            <a href="">
                <img class="w-100 rounded-more" src="image/ea6597cba5cdb14ae3d869dbb6135af5151f93a2_1610049120.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
        <div class="col-md-3 col-6 px-2 overflow-hidden pt-md-0 pt-2">
            <a href="">
                <img class="w-100 rounded-more" src="image/b28174d47d588f1558d3431249e453f3bb964a4c_1610910719.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
    </div>
</section>
<hr class="w-100 hr d-md-none d-block">
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-3 d-md-block d-none" >
    <div class="row">
        <div class="col-6 pr-md-3 pl-md-2 px-1">
            <a href="">
                <img class="w-100 rounded_high" src="image/f2bca6d3c59abdffd620b08e5417694ffc52ccf3_1611653353.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
        <div class="col-6  pr-md-2 pl-md-3 px-1">
            <a href="">
                <img  class="w-100 rounded_high" src="image/2a88effae57a0e405e2ab2eadfb6afdcdc607cfa_1612167658.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
            </a>
        </div>
    </div>
</section>
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="w-100">
        <img  class="w-100 rounded-more" src="image/herowrtyui.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
    </div>
</section>
<hr class="w-100 hr">
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-2 brand  d-md-block d-none">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">برندهای ویژه</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 129px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2 shadow-none">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/honor.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2 shadow-none">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/snova.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/1000018250.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/sumsung.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/shahab.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/bg+.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/b-pnoramic.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/x.vision.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/adata.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-2 ">
    <div class="w-100 bg-swiper shadow_swiper rounded_between">
        <div class="row px-md-5 px-2">
            <div class="w-auto pr-0">
                <p class="pl-4 pb-2 pt-md-3 m-0 border-red text-pro-title">کتاب چاپی</p>
            </div>
            <div class=" pr-3 d-md-block d-none" style="width: calc(100% - 115px)">
                <div class="w-100 border-rest">
                </div>
            </div>
        </div>
        <div class="swiper-container swiper-product ">
            <div class="swiper-wrapper pt-md-4 pb-3">
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/1984.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب 1984 اثر جورج اورول نشر شاهدخت پاییز
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/bed.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب تختخوابت را مرتب کن اثر ژنرال ویلیام اچ. مک ریون
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۱۲,۷۷۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100  bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/fana.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">گوشی موبایل شیائومی مدل Redmi 9A M2006C3LG دو سیم‌ کارت ظرفیت 32 گیگابایت</p>
                        <p class="text-left">  <span class="font-weight-bolder">
                ۲,۹۹۰,۰۰۰
                                    </span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 h-100" src="image/books/forance.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب چهار اثر از فلورانس اسکاول شین اثر فلورانس اسکاول شین
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100" src="image/books/littleprincebook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب شازده کوچولو اثر آنتوان دوسنت اگزوپری انتشارات نگین ایران
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/asarbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب اثر مرکب اثر دارن هاردی نشر داریوش
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/nimetarikbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب نیمه تاریک وجود اثر دبی فورد نشر آتیسا
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 bg-white rounded product-box px-md-3 px-1 py-2">
                        <div class="w-100 px-6">
                            <img class="w-100 " src="image/books/pastilbook.jpg?v=2.1.<?= rand(100000,10000000)?>" alt="">
                        </div>
                        <p class="text-height">
                            کتاب پاستیل های بنفش اثر کاترین اپلگیت
                        </p>
                        <p class="text-left">  <span class="font-weight-bolder">74,000,000</span>تومان</p>
                    </div>
                </div>
            </div>
            <div class="btn swiper-button-prev  d-md-inline-block d-none border_left"></div>
            <div class="btn swiper-button-next  d-md-inline-block d-none border_right"></div>
            <div class="swiper-scrollbar d-md-none d-block text-success"></div>
        </div>
    </div>
</section>
<section class="container-fluid py-3 d-lg-block d-none">
    <div class="w-100 bg-white rounded text-center pt-4 pb-3">
        <p class="text-category-title pb-2">بیش از2.000.000کالا در ذسته بندی های مختلف</p>
        <div class="row px-5">
            <div class="col">
                <span class="fa fa-laptop fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">کالای دیجیتال </span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="fa fa-car fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">خودرو ابزار و تجهیزات صنعتی</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="fa fa-pen fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">مد و پوشاک</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="fa fa-heart fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50"> زیبایی و سلامت</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="fa fa-home-heart fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">خانه و آشپزخانه</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="far fa-pencil fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">کتاب لوازم تحریر و هنر</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="fa fa-child fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">اسباب بازی کودک و نوزاذ</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="far fa-volleyball-ball fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">ورزش وسفر</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
            <div class="col">
                <span class="fa fa-shopping-basket fa-3x text-cyan"></span>
                <span class="d-block pt-2 h-50">خوردن و آشامیدنی</span>
                <span  class="d-block text-cyan">6400کالا+</span>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="w-100">
        <button class="btn btn-success bg-instagram border-0 shadow">
            <span class="fab fa-instagram"></span>اینستاگرام دیجی کالا
        </button>
    </div>
</section>
<footer>
    <section class="w-100 bg-light-gray" >
        <div class="container-fluid">
            <div class="row d-none d-md-flex justify-content-around px-lg-5">
                <div class="col px-lg-3 px-1 text-center footer-icon">
                    <div class="w-100">
                        <img class="w-100 mx-auto x-2 py-4" src="image/footer/8f570b58.svg" alt="">
                    </div>
                    <p>تحویل اکسپرس</p>
                </div>
                <div class="col px-lg-3 px-1 text-center footer-icon">
                    <div class="w-100">
                        <img class="w-100 mx-auto px-2 py-4" src="image/footer/24support.svg" alt="">
                    </div>
                    <p>پشتیبانی ۲۴ ساعته</p>
                </div>
                <div class="col px-lg-3 px-1 text-center footer-icon">
                    <div class="w-100">
                        <img class="w-100 mx-auto px-2 py-4" src="image/footer/payinplace.svg" alt="">
                    </div>
                    <p>پرداخت در محل</p>
                </div >
                <div class="col px-lg-3 px-1 text-center footer-icon">
                    <div class="w-100">
                        <img class="w-100 mx-auto px-2 py-4" src="image/footer/7return.svg" alt="">
                    </div>
                    <p>۷ روز ضمانت بازگشت</p>
                </div>
                <div class="col px-lg-3 px-1 text-center footer-icon">
                    <div class="w-100">
                        <img class="w-100 mx-auto px-2 py-4" src="image/footer/fdb293e6.svg" alt="">
                    </div>
                    <p>ضمانت اصل‌بودن کالا</p>
                </div>
            </div>
            <hr class="w-100 hr d-none d-md-block">
            <div class="row" id="footer-form">
                <div class="col-lg-8 px-4" id="foot">
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <ul class="list-unstyled p-0">
                                <li class="text-title-f">ضمانت اصل‌بودن کالا</li>
                                <li class="text-o-f">نحوه ثبت سفارش</li>
                                <li class="text-o-f">راهنمای خرید از دیجی‌کالا</li>
                                <li class="text-o-f">رویه ارسال سفارش</li>
                                <li class="text-o-f">شیوه‌های پرداخت</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-6">
                            <ul class="list-unstyled p-0">
                                <li class="text-title-f">خدمات مشتریان</li>
                                <li class="text-o-f">ضمانت اصل‌بودن کالا</li>
                                <li class="text-o-f">نحوه ثبت سفارش</li>
                                <li class="text-o-f">راهنمای خرید از دیجی‌کالا</li>
                                <li class="text-o-f"> حریم خصوصی</li>
                                <li class="text-o-f">گزارش باگ</li>
                            </ul>
                        </div>
                        <div class="col-4 d-md-block d-none">
                            <ul class="list-unstyled  p-0">
                                <li class="text-title-f">بادیجی کالا</li>
                                <li class="text-o-f"> اتاق خبر دیجی‌کالا</li>
                                <li class="text-o-f">فروش در دیجی‌کالا</li>
                                <li class="text-o-f"> فرصت‌های شغلی</li>
                                <li class="text-o-f"> تماس با دیجی‌کالا</li>
                                <li class="text-o-f">   راهنمای هویت بصری</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-md-5" id="footer_input">
                    <p >از تخفیف‌ها و جدیدترین‌های دیجی‌کالا باخبر شوید:</p>
                    <div class="w-100 pt-2 pb-md-5">
                        <div class="input-group input-email-form"  style="height: 18%" dir="rtl">
                            <input class="form-control text-right h-100 input-email rounded-right" type="text" placeholder="آدرس ایمیل خود را وارد کنید">
                            <div class="input-group-prepend">
                                <button class="btn bg-btn-send rounded-left btn-send">ارسال</button>
                            </div>
                        </div>
                    </div>
                    <p>دیجی‌کالا را در شبکه‌های اجتماعی دنبال کنید:</p>
                    <div class="row d-md-block d-none">
                        <span class="fab fa-twitter fa-social px-3"></span>
                        <span class="fab fa-instagram fa-social px-3"></span>
                        <span class="fab fa-linkedin fa-social px-3"></span>
                        <span class="fab fa-app-store fa-social px-3"></span>
                    </div>
                </div>
            </div>
            <hr class="w-100">
            <div class="w-100 text-center pb-3" id="footer-app">
                <p id="footer_app_text" >هفت روز هفته ، ۲۴ ساعت شبانه‌روز پاسخگوی شما هستیم
                    شماره تماس :
                    ۶۱۹۳۰۰۰۰ - ۰۲۱
                    آدرس ایمیل :
                    info@digikala.com
                </p>
                <div class="w-100">
                    <div class="row justify-content-center">
                        <div class="px-2 w-app">
                            <img class="w-100 rounded-more" src="image/c4abfc14.png" alt="">
                        </div>
                        <div class="px-2 w-app">
                            <img class="w-100 rounded-more" src="image/dd753f51.png" alt="">
                        </div>
                        <div class="px-2 w-app pt-md-0 pt-2">
                            <img class="w-100 rounded-more" src="image/f822b108%20(1).svg" alt="">
                        </div>
                        <div class="px-2 w-app pt-md-0 pt-2">
                            <img class="w-100 rounded-more" src="image/692fd5db.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 bg-dark-gray">
        <div class="container-fluid px-5">
            <div class="w-100 d-md-block d-none pt-2 px-3">
                <div class="w-100">
                    <div class="row">
                        <div class="col-7 px-0">
                            <h4 class="text-title-f">فروشگاه اینترنتی دیجی‌کالا، بررسی، انتخاب و خرید آنلاین</h4>
                            <p class="text-gray-f text-f d-inline">
                                دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به سایت دیجی‌کالا با دنیایی از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.
                            </p>
                            <a class="text-link-f"  href="">مشاهده بیشتر</a>
                            <div class="w-100">
                                <a class="text-link-f" href="">اسباب بازی</a>
                                <a class="text-link-f" href="">عطر و ادوکلن</a>
                                <a class="text-link-f" href="">تلویزیون</a>
                                <a class="text-link-f" href="">ماسک تنفسی</a>
                                <a class="text-link-f" href="">لوازم جانبی </a>
                                <a class="text-link-f" href="">رنگ مو و ابرو</a>
                                <a class="text-link-f" href="">مانتو</a>
                            </div>

                        </div>
                        <div class="col-5 px-5">
                            <div class="row">
                                <div class="col-4 px-1">
                                    <div class="w-100  px-4 py-2 h-100 bg-light rounded-more">
                                        <img class="w-100" src="image/1e5dab5a.png" alt="">
                                    </div>
                                </div>
                                <div class="col-4  px-1">
                                    <div class="w-100 px-4 py-2 h-100 bg-light rounded-more">
                                        <img class="w-100" src="image/logo.png" alt="">
                                    </div>
                                </div>
                                <div class="col-4  px-1">
                                    <div class="w-100 h-100  px-4 py-2 bg-light rounded-more">
                                        <img class="w-100" src="image/logo.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-2">
                        <img src="image/mag.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="image/pay.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="image/digistyle.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="image/club.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="image/affilate.svg" alt="">
                    </div>
                    <div class="col-2">
                        <img src="image/fidbo.svg" alt="">
                    </div>
                </div>
                <hr class="w-100">
                <div class="w-100">
                    <p class="m-0 pb-3 text-f">
                        استفاده از مطالب فروشگاه اینترنتی دیجی‌کالا فقط برای مقاصد غیرتجاری و با ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین دیجی‌کالا) می‌باشد.
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="assets/js/jquery.min.js?v=2.1.<?= rand(100000,10000000)?>"></script>
<script src="assets/plugins/Bootstrap/js/bootstrap.min.js?v=2.1.<?= rand(100000,10000000)?>"></script>
<script src="assets/js/main.js?v=2.1.<?= rand(100000,10000000)?>"></script>
<script src="assets/plugins/OwlCarousel/owl.carousel.min.js?v=2.1.<?= rand(100000,10000000)?>"></script>
<script src="assets/swiper/swiper-bundle.js?v=2.1.<?= rand(100000,10000000)?>"></script>
<script src="assets/swiper/swiper-bundle.min.js?v=2.1.<?= rand(100000,10000000)?>"></script>
<script>
    var owl=$('.owl-top');
    owl.owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplaySpeed: 4000,
        autoplayTimeout: 8000,
        items: 1,
        dotsClass: 'topslider_dot',
        nav:true,
        navText: [' <span class="far fa-angle-left fa-2x text-light"></span>',' <span class="far fa-angle-right fa-2x text-light"></span>'],
        navClass: ['prev btn shadow-none d-sm-block d-none','next btn shadow-none d-sm-block d-none'],
        navContainerClass: 'top-navs',
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',

    });
    $(".next").click(function () {
        owl.trigger("owl.next");
    });
    $('.owl-product').owlCarousel({
        rtl: true,
        margin:10,
        autoplay: false,
        responsive: {
            0: {
                items: 2
            },
            568: {
                items: 3
            },
            786: {
                items: 3
            },
            992:{
                items: 3.5
            },
            1300:{
                items: 4
            },
        },
        dots: false,
        nav:true,
        navText: [' <span class="far fa-2x fa-angle-left text-secondary"></span>',' <span class="far fa-2x fa-angle-right text-secondary"></span>'],
        navClass: ['owl-prev-green btn shadow-none d-none d-lg-block','owl-next-green btn shadow-none d-none d-lg-block'],
        navContainerClass: 'green-navs'
    });
    $('.owl-pro').owlCarousel({
        rtl:true,
        autoplay:true,
        autoplaySpeed:3000,
        autoplayTimeout:3000,
        responsive: {
            0:{
                items:1
            },
            568:{
                items:2
            },
            786:{
                items:3
            },
            992:{
                items:4
            },
        },
        items:4,
        dots:false,
        margin:40,
        nav:true,
        navText:['<span class="far fa-3x fa-angle-left text-secondary"></span>','<span class="far fa-3x fa-angle-right text-secondary"></span>'],
        navClass:['btn shadow-none next-pro py-3 bg-white border_right shadow-pro','btn shadow-none prev-pro bg-white border_left py-3 shadow-pro']

    });
    const swiper=new Swiper('.swiper-product',{
        slidesPerView:4,
        slidesPerGroup:1,
        spaceBetween:10,
        breakpoints:{
            '0':{
                slidesPerView: 1.6,
            },
            '586':{
                slidesPerView: 2.5,
            },
            '768':{
                slidesPerView: 3,
            },
            '992':{
                slidesPerView: 4,
            },
        },
        scrollbar:{
            el:'.swiper-scrollbar',
            hide:true,
        },
        navigation:{
            nextEl:'.swiper-button-next',
            prevEl:'.swiper-button-prev',
        },
        });
</script>
</body>
</html>
