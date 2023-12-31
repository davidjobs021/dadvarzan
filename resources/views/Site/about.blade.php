@extends('master')
@section('style')
    <meta name="description"         content="{{$thispage->page_description}}">
    <meta name="keyword"             content="{{implode("،" , json_decode($thispage->keyword))}}">
    <meta name="twitter:card"        content="summary" />
    <meta name="twitter:title"       content="{{$thispage->tab_title}}" />
    <meta name="twitter:description" content="{{$thispage->page_description}}" />
    <meta itemprop="name"            content="{{$thispage->tab_title}}">
    <meta itemprop="description"     content="{{$thispage->page_description}}">
    <meta property="og:url"          content="{{url()->current()}}" />
    <meta property="og:title"        content="{{$thispage->tab_title}}"/>
    <meta property="og:description"  content="{{$thispage->page_description}}" />
    <link rel="canonical" href="{{url()->current()}}" />

    <link rel="stylesheet" href="{{asset('site/css/animated-headline.css')}}" />
    <title>{{$thispage->tab_title}}</title>
@endsection
@section('main')

        <section class="breadcrumb-area section-padding "   @if($slides->file_link) style="background-image: url({{asset('storage/'.$slides->file_link)}})" @else style="background-image: url({{asset('#')}})" @endif>
            <div class="overlay z-index-n1"></div>
            <div class="container">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h5 class="ribbon ribbon-lg ribbon-white mb-2">درباره ما</h5>
                        <h2 class="section__title fs-45 lh-60 text-white"></h2>
                    </div>
                </div>
            </div>
        </section>

    <section class="about-area section--padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content pb-5">
                        <div class="section-heading">
                            <h2 class="section__title pb-3 lh-50">بازار جهانی پیشرو برای یادگیری و آموزش</h2>
                            <p class="section__desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                            </p>
                        </div>
                        <!-- end section-heading -->
                        <ul class="generic-list-item pt-3">
                            <li><i class="la la-check-circle mr-2 text-success"></i>دوره های آنلاین با سیستم های تخفیف کامل.</li>
                            <li><i class="la la-check-circle mr-2 text-success"></i>گواهینامه های آنلاین که در سراسر جهان قابل استفاده هستند.</li>
                            <li><i class="la la-check-circle mr-2 text-success"></i>یک برنامه توسعه رهبری آنلاین در ادوکا.</li>
                        </ul>
                    </div>
                    <!-- end about-content -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="generic-img-box generic-img-box-layout-2">
                        <div class="img__item img__item-1">
                            <img class="lazy" src="images/img-loading.png" data-src="images/img15.jpg" alt="درباره تصویر" />
                            <div class="generic-img-box-content">
                                <h3 class="fs-24 font-weight-semi-bold pb-1">55 هزار</h3>
                                <span>مربیان</span>
                            </div>
                        </div>
                        <div class="img__item img__item-2">
                            <img class="lazy" src="images/img-loading.png" data-src="images/img16.jpg" alt="درباره تصویر" />
                            <div class="generic-img-box-content">
                                <h3 class="fs-24 font-weight-semi-bold pb-1">6900+</h3>
                                <span>دوره های آموزشی</span>
                            </div>
                        </div>
                        <div class="img__item img__item-3">
                            <img class="lazy" src="images/img-loading.png" data-src="images/img17.jpg" alt="درباره تصویر" />
                            <div class="generic-img-box-content">
                                <h3 class="fs-24 font-weight-semi-bold pb-1">40 میلیون</h3>
                                <span>فراگیران</span>
                            </div>
                        </div>
                    </div>
                    <!-- end generic-img-box -->
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="get-started-area pt-30px pb-120px position-relative">
        <span class="ring-shape ring-shape-1"></span>
        <span class="ring-shape ring-shape-2"></span>
        <span class="ring-shape ring-shape-3"></span>
        <span class="ring-shape ring-shape-4"></span>
        <span class="ring-shape ring-shape-5"></span>
        <span class="ring-shape ring-shape-6"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item hover-s text-center">
                        <div class="card-body">
                            <img src="images/img-loading.png" data-src="images/small-img-2.jpg" alt="تصویر کارت" class="img-fluid lazy rounded-full" />
                            <h5 class="card-title pt-4 pb-2">یادگیری شخصی</h5>
                            <p class="card-text">دانش آموزان با سرعت خود تمرین می کنند، ابتدا شکاف های درک خود را پر می کنند و سپس یادگیری خود را تسریع می کنند.</p>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item hover-s text-center">
                        <div class="card-body">
                            <img src="images/img-loading.png" data-src="images/small-img-3.jpg" alt="تصویر کارت" class="img-fluid lazy rounded-full" />
                            <h5 class="card-title pt-4 pb-2">محتوای قابل اعتماد</h5>
                            <p class="card-text">ایجاد شده توسط کارشناسان، کتابخانه دوره از تمرینات و درس های مورد اعتماد ریاضی، علوم و موارد دیگر را پوشش می دهد.</p>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="card card-item hover-s text-center">
                        <div class="card-body">
                            <img src="images/img-loading.png" data-src="images/small-img-4.jpg" alt="تصویر کارت" class="img-fluid lazy rounded-full" />
                            <h5 class="card-title pt-4 pb-2">توانمندسازی معلمان</h5>
                            <p class="card-text">با Coursector، معلمان می توانند شکاف های درک دانش آموزان خود را شناسایی کنند، آموزش خیاطی را انجام دهند</p>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
            <p class="text-center">می خواهید با ما بپیوندید؟ <a href="careers.html" class="text-color hover-underline">موقعیت های باز</a> ما را ببینید<a href="careers.html" class="text-color hover-underline"></a></p>
        </div>
        <!-- end container -->
    </section>

    <section class="our-mission-area section--padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row pb-5">
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box">
                                <img src="images/img-loading.png" data-src="images/img8.jpg" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box my-3">
                                <img src="images/img-loading.png" data-src="images/img10.jpg" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box">
                                <img src="images/img-loading.png" data-src="images/img11.jpg" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6 responsive-column-half">
                            <div class="img-box my-3">
                                <img src="images/img-loading.png" data-src="images/img12.jpg" alt="تصویر ماموریت ما" class="img-fluid lazy rounded-rounded" />
                            </div>
                        </div>
                        <!-- end col-lg-6 -->
                    </div>
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="about-content pl-4">
                        <div class="section-heading">
                            <h2 class="section__title pb-3 lh-50">ماموریت ما</h2>
                            <p class="section__desc pb-3">
                                ما یکی از آن شرکت ها نیستیم. ما در حال بازنگری در آموزش از پایین به بالا هستیم. وب تقریباً همه چیز را بازنگری کرده است - تجارت، شبکه های اجتماعی، مراقبت های بهداشتی و غیره. ما در حال ساختن آموزش مورد نیاز
                                جهان هستیم - اولین آموزش واقعی خالص. ما در ایجاد یک تجربه آموزشی جذاب از نوآوران فناوری مدرن بیشتر از کلاس درس استفاده می کنیم.
                            </p>
                            <p class="section__desc text-black">آموزش خراب است بیایید به ما کمک کنید تا آموزشی را بسازیم که جهان سزاوار آن است.</p>
                        </div>
                        <!-- end section-heading -->
                    </div>
                    <!-- end about-content -->
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="story-area section--padding">
        <div class="container">
            <div class="story-content text-center">
                <div class="section-heading">
                    <h2 class="section__title pb-3 lh-50">داستان ما</h2>
                    <p class="section__desc">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                        متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                    </p>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end story-content -->
            <div class="row pt-60px">
                <div class="col-lg-4 responsive-column-half">
                    <div class="story-img-item">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img37.jpg" alt="تصویر داستان" />
                    </div>
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="story-img-item mt-90px">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img38.jpg" alt="تصویر داستان" />
                        <a href="#" class="video-play-btn" data-fancybox="" data-src="https://www.youtube.com/watch?v=cRXm1p-CNyk">
                            <span class="icon-element icon-element-md"><i class="la la-play"></i></span>
                        </a>
                    </div>
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-4 responsive-column-half">
                    <div class="story-img-item">
                        <img class="lazy" src="images/img-loading.png" data-src="images/img39.jpg" alt="تصویر داستان" />
                    </div>
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <div class="section-block"></div>

    <section class="team-member-area section--padding">
        <div class="container">
            <div class="team-member-heading-content text-center">
                <div class="section-heading">
                    <h2 class="section__title lh-50">با رهبران ما ملاقات کنید</h2>
                </div>
                <!-- end section-heading -->
            </div>
            <!-- end team-member-heading-content -->
            <div class="row pt-60px">
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-1.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">الکس اسمیت</a></h5>
                            <p class="card-text">موسس و مدیر عامل</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-2.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">رز تیلور</a></h5>
                            <p class="card-text">رئیس و مدیرعامل</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-3.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">جف کالین</a></h5>
                            <p class="card-text">مدیر ارشد فناوری</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-4.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">مایک هاردسون</a></h5>
                            <p class="card-text">افسر ارشد بازاریابی</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-5.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">جان اسمیت</a></h5>
                            <p class="card-text">معاون محصول</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-6.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">کوین مارتین</a></h5>
                            <p class="card-text">معاون خدمات</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-7.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">تیشام الردی</a></h5>
                            <p class="card-text">معاون، عملیات</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column-half">
                    <div class="card card-item member-card text-center">
                        <div class="card-image">
                            <img class="card-img-top" src="images/small-avatar-1.jpg" alt="عضو تیم" />
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#">آلپر دوئین</a></h5>
                            <p class="card-text">مدیر ارشد مالی</p>
                            <ul class="social-icons social-icons-styled social--icons-styled pt-4">
                                <li>
                                    <a href="#"><i class="la la-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="testimonial-area bg-gray section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-content-wrap pb-4">
                        <div class="section-heading">
                            <h2 class="section__title mb-3">از جامعه ادوکا</h2>
                            <p class="section__desc">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div>
                        <!-- end section-heading -->
                        <div class="btn-box mt-28px">
                            <a href="about.html" class="btn theme-btn">همه را کاوش کنید <i class="la la-arrow-left icon ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <h3 class="fs-22 font-weight-medium pb-3">بیش از 30 میلیون نفر در حال یادگیری در ادوکا هستند</h3>
                    <div class="testimonial-carousel-2 owl-action-styled owl-action-styled-2">
                        <div class="card card-item">
                            <div class="card-body">
                                <p class="card-text">
                                    من واقعاً این سایت را به همه دوستانم و هر کسی که مایل به یادگیری مهارت های واقعی است توصیه می کنم. این پلتفرم به شما این امکان را می دهد که در زمان مناسب از متخصصان بیاموزید.
                                </p>
                                <div class="media media-card align-items-center pt-4">
                                    <div class="media-img avatar-md">
                                        <img src="images/small-avatar-1.jpg" alt="آواتار گواهی" class="rounded-full" />
                                    </div>
                                    <div class="media-body">
                                        <h5>کوین مارتین</h5>
                                        <div class="d-flex align-items-center pt-1">
                                            <span class="lh-18 pr-2">دانشجو</span>
                                            <div class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <p class="card-text">
                                    من واقعاً این سایت را به همه دوستانم و هر کسی که مایل به یادگیری مهارت های واقعی است توصیه می کنم. این پلتفرم به شما این امکان را می دهد که در زمان مناسب از متخصصان بیاموزید.
                                </p>
                                <div class="media media-card align-items-center pt-4">
                                    <div class="media-img avatar-md">
                                        <img src="images/small-avatar-2.jpg" alt="آواتار گواهی" class="rounded-full" />
                                    </div>
                                    <div class="media-body">
                                        <h5>الیور بدوز</h5>
                                        <div class="d-flex align-items-center pt-1">
                                            <span class="lh-18 pr-2">دانشجو</span>
                                            <div class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <p class="card-text">
                                    من واقعاً این سایت را به همه دوستانم و هر کسی که مایل به یادگیری مهارت های واقعی است توصیه می کنم. این پلتفرم به شما این امکان را می دهد که در زمان مناسب از متخصصان بیاموزید.
                                </p>
                                <div class="media media-card align-items-center pt-4">
                                    <div class="media-img avatar-md">
                                        <img src="images/small-avatar-3.jpg" alt="آواتار گواهی" class="rounded-full" />
                                    </div>
                                    <div class="media-body">
                                        <h5>جکوب هالاک</h5>
                                        <div class="d-flex align-items-center pt-1">
                                            <span class="lh-18 pr-2">دانشجو</span>
                                            <div class="review-stars">
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end media -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end testimonial-carousel-2 -->
                </div>
                <!-- end col-lg-8 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="cta-area pt-60px pb-60px position-relative overflow-hidden">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="cta-content-wrap media py-4 align-items-center">
                        <div class="flex-shrink-0 mr-3">
                            <svg class="svg-icon-color-gray" width="85" viewBox="0 -48 496 496" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m472 0h-448c-13.230469 0-24 10.769531-24 24v352c0 13.230469 10.769531 24 24 24h448c13.230469 0 24-10.769531 24-24v-352c0-13.230469-10.769531-24-24-24zm8 376c0 4.414062-3.59375 8-8 8h-448c-4.40625 0-8-3.585938-8-8v-352c0-4.40625 3.59375-8 8-8h448c4.40625 0 8 3.59375 8 8zm0 0"
                                ></path>
                                <path d="m448 32h-400v240h400zm-16 224h-368v-208h368zm0 0"></path>
                                <path
                                    d="m328 200.136719c0-17.761719-11.929688-33.578125-29.007812-38.464844l-26.992188-7.703125v-2.128906c9.96875-7.511719 16-19.328125 16-31.832032v-14.335937c0-21.503906-16.007812-39.726563-36.449219-41.503906-11.183593-.96875-22.34375 2.800781-30.574219 10.351562-8.25 7.550781-12.976562 18.304688-12.976562 29.480469v16c0 12.503906 6.03125 24.328125 16 31.832031v2.128907l-26.992188 7.710937c-17.078124 4.886719-29.007812 20.703125-29.007812 38.464844v39.863281h160zm-16 23.863281h-128v-23.863281c0-10.664063 7.160156-20.152344 17.40625-23.082031l38.59375-11.023438v-23.070312l-3.976562-2.3125c-7.527344-4.382813-12.023438-12.105469-12.023438-20.648438v-16c0-6.703125 2.839844-13.160156 7.792969-17.695312 5.007812-4.601563 11.496093-6.832032 18.382812-6.207032 12.230469 1.0625 21.824219 12.285156 21.824219 25.566406v14.335938c0 8.542969-4.496094 16.265625-12.023438 20.648438l-3.976562 2.3125v23.070312l38.59375 11.023438c10.246094 2.9375 17.40625 12.425781 17.40625 23.082031zm0 0"
                                ></path>
                                <path d="m32 364.945312 73.886719-36.945312-73.886719-36.945312zm16-48 22.113281 11.054688-22.113281 11.054688zm0 0"></path>
                                <path d="m152 288h16v80h-16zm0 0"></path>
                                <path d="m120 288h16v80h-16zm0 0"></path>
                                <path d="m336 288h-48v32h-104v16h104v32h48v-32h128v-16h-128zm-16 64h-16v-48h16zm0 0"></path>
                            </svg>
                        </div>
                        <div class="media-body">
                            <h2 class="fs-28 font-weight-bold mb-1">به جهان آنلاین آموزش دهید</h2>
                            <p class="fs-17">یک دوره ویدیویی آنلاین ایجاد کنید، به دانش آموزان در سراسر جهان دسترسی پیدا کنید و درآمد کسب کنید</p>
                        </div>
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col-lg-9 -->
                <div class="col-lg-3">
                    <div class="cta-btn-box text-left">
                        <a href="become-a-teacher.html" class="btn theme-btn">فناوری در ادوکا <i class="la la-arrow-left icon ml-1"></i></a>
                    </div>
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <div class="section-block"></div>

    <section class="about-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content pb-5">
                        <div class="section-heading">
                            <h2 class="section__title pb-3 lh-50">مکانی عالی برای رشد</h2>
                            <p class="section__desc pb-3">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته
                            </p>
                            <p class="section__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
                        </div>
                        <!-- end section-heading -->
                        <div class="btn-box pt-35px">
                            <a href="#" class="btn theme-btn">با تیم ما بپیوندید <i class="la la-arrow-left icon ml-1"></i></a>
                        </div>
                    </div>
                    <!-- end about-content -->
                </div>
                <!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="generic-img-box generic-img-box-layout-3">
                        <img src="images/img-loading.png" data-src="images/img13.jpg" alt="درباره تصویر" class="img__item lazy img__item-1" />
                    </div>
                </div>
                <!-- end col-lg-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection
