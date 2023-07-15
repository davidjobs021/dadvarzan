<!DOCTYPE html>
<html lang="fa" class="no-js">

<head>
    <meta charset="utf-8">
    <title>هلدینگ حقوقی دادورزان امین</title>
    <meta name="description" content="هلدینگ حقوقی دادورزان امین">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}" />
    <script src="{{asset('site/js/modernizr.custom.js')}}"></script>
</head>
<body>

<div id="loading">
    <div id="preloader">
        <span></span>
        <span></span>
        <div id="preloader_text">در حال بارگذاری ...</div>
    </div>
</div>

<div class="global-overlay">
    <div class="overlay">

        <div id="container">
            <div id="output" class="back-fss"></div>
        </div>

    </div>
</div>

@yield('main')

<script src="{{asset('site/js/jquery.min.js')}}"></script>
<script src="{{asset('site/js/jquery.easings.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/velocity.min.js')}}"></script>
<script src="{{asset('site/js/velocity.ui.min.js')}}"></script>
<script src="{{asset('site/js/notifyMe.js')}}"></script>
<script src="{{asset('site/js/contact-me.js')}}"></script>
<script src="{{asset('site/js/jquery.mousewheel.js')}}"></script>
<script src="{{asset('site/js/jquery.mCustomScrollbar.js')}}"></script>
<script src="{{asset('site/js/classie.js')}}"></script>
<script src="{{asset('site/js/dialogFx.js')}}"></script>
<script src="{{asset('site/js/photoswipe.js')}}"></script>
<script src="{{asset('site/js/photoswipe-ui-default.js')}}"></script>

<!-- Flat Surface Shader colors -->
<script>
    var ambient_value = '#1F222E'; // ambient color
    var diffuse_value = '#2B2D35'; // diffuse color
</script>

<script src="{{asset('site/js/fss.js')}}"></script>
<script src="{{asset('site/js/custom-fss.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>

<!--[if lt IE 10]><script type="text/javascript" src="{{asset('site/js/placeholder.js')}}"></script><![endif]-->

</body>

</html>

