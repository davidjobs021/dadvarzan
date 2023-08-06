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

    <section class="hero-area">
        <div class="hero-slider owl-action-styled">
            @foreach($slides as $slide)
                <div class="hero-slider-item" style="background-image: url({{asset('storage/'.$slide->file_link)}})">
                    <div class="container">
                        <div class="hero-content text-right">
                            <div class="section-heading">
                                <h2 class="section__title text-white fs-65 lh-80 pb-3"></h2>
                                <p class="section__desc text-white pb-4"></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="hero-feature-wrap overflow-hidden" style="background-color: #cea54a">
                @foreach($slides as $slide)
                    <span class="ring-shape ring--shape ring-shape-{{$slide->id}}"></span>
                @endforeach
            </div>
        </div>
    </section>

    <section class="client-logo-area section-padding position-relative overflow-hidden text-center">
        <span class="stroke-shape stroke-shape-1"></span>
        <span class="stroke-shape stroke-shape-2"></span>
        <span class="stroke-shape stroke-shape-3"></span>
        <span class="stroke-shape stroke-shape-4"></span>
        <span class="stroke-shape stroke-shape-5"></span>
        <span class="stroke-shape stroke-shape-6"></span>
        <div class="container">
            <div class="section-heading">
                <h2 class="section__title mb-3">برندهایی که ما در کنارشان بوده ایم</h2>
            </div>
            <div class="client-logo-carousel mt-40px">
                @foreach($customers as $customer)
                    <a href="#" class="client-logo-item" style="width:100px">
{{--                        @php--}}
{{--                            $dataArray = json_decode($customer->image, true);--}}
{{--                        @endphp--}}
{{--                        <img src="{{asset($dataArray['thumb'])}}" alt="{{$customer->name}}"/>--}}
                        <img src="{{asset($customer->image)}}" alt="{{$customer->name}}"/>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="category-area bg-gray section-padding text-center">
        <div class="container">
            <div class="section-heading">
                <h2 class="section__title">خدمات حقوقی دادورزان امین</h2>
            </div>
            <div class="row pt-50px">
                @foreach($services as $service)

                    <div class="{{$loop->index + 1 > 3 ? 'col-lg-3' : 'col-lg-4'}} responsive-column-half">

                    <div class="flip-box">
                        <div class="flip-box-front">
                            <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset($service->image)}}" alt="{{$service->title}}" class="flip-img lazy" />
                            <a href="#" class="flip-content d-flex align-items-center justify-content-center">
                                <div>
                                    <h3 class="flip-title mb-1">{{$service->title}}</h3>
                                </div>
                            </a>
                        </div>
                        <div class="flip-box-back">
                            <img src="{{asset('site/images/img-loading.png')}}" data-src="{{asset($service->image)}}" alt="{{$service->title}}" class="flip-img lazy" />
                            <a href="#" class="flip-content d-flex align-items-center justify-content-center btn-icon">
                                <i class="fe fe-code"></i>
                                <div>
                                    <h3 class="flip-title">مشاهده جزئیات</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="about-area section--padding overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content pb-5">
                        <div class="section-heading">
                            <h2 class="section__title">ارائه دهنده آنلاین خدمات حقوقی </h2>
                            <span class="section-divider"></span>
                            <p class="section__desc text-justify">
                                تفاوتی ندارد یک کسب و کار کوچک داشته باشید یا یک هلدینگ بین المللی، در برابر چالش‌های حقوقی همواره نیاز به یک مشاور حقوقی با تجربه و قراردادهای منسجم خواهید داشت. وینداد، این امکان را برای شما به ارمغان آورده است تا تمام امور حقوقی و ثبتی خود را بدون دغدغه و به صورت یکپارچه به تیم متخصص و باتجربه‌ای بسپارید که سال‌ها در این حوزه فعالیت داشته و به انواع مسائل و قوانین کسب و کار تسلط بالایی دارند
                            </p>
                        </div>
                        <div class="row pt-4 pb-3">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="info-icon-box mb-3">
                                    <h4 class="fs-20 font-weight-semi-bold pt-3">300+ کسب وکار</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="info-icon-box mb-3">
                                    <h4 class="fs-20 font-weight-semi-bold pt-3">600+ دقیقه مشاور</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="info-icon-box mb-3">
                                    <h4 class="fs-20 font-weight-semi-bold pt-3">10+ سال تجربه</h4>
                                </div>
                            </div>
                        </div>
                        <div class="btn-box">
                            <a href="about.html" class="btn theme-btn">بیشتر بدانید <i class="la la-arrow-left icon ml-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="generic-img-box">
                        <img src="{{asset('site/images/img-loading.png')}}" data-src="site/images/img13.jpg" alt="درباره تصویر" class="img__item img__item-1 lazy">
                        <img src="{{asset('site/images/img-loading.png')}}" data-src="site/images/img14.jpg" alt="درباره تصویر" class="img__item img__item-2 lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cat-area section-padding img-bg">
        <div class="overlay"></div>
        <span class="ring-shape ring-shape-1"></span>
        <span class="ring-shape ring-shape-2"></span>
        <span class="ring-shape ring-shape-3"></span>
        <span class="ring-shape ring-shape-4"></span>
        <span class="ring-shape ring-shape-5"></span>
        <span class="ring-shape ring-shape-6"></span>
        <span class="ring-shape ring-shape-7"></span>
        <div class="container">
            <div class="cta-content-wrap text-center position-relative">
                <div class="section-heading">
                    <h2 class="section__title fs-20 lh-60 text-white">برای هرگونه سوال و یا درخواست با مشاورین <strong>موسسه حقوقی دادورزان امین</strong> تماس حاصل نمایید.<br> کارشناسان ما در ساعات اداری پاسخگوی شما می باشند.</h2>
                </div>
                <div class="cat-btn-box mt-35px">
                    <a href="tel:+989128119938" class="btn theme-btn theme-btn-white">تماس باما <i class="la la-arrow-left icon ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script src="{{asset('site/js/animated-headline.js')}}"></script>
@endsection
