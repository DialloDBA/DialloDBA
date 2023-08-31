<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>{{ $title ?? 'DialloDBA - Gestionnaire Informaticien'}}</title>
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{URL::asset('ui/css/plugins.css')}}">
        @yield('css')
        <link type="text/css" rel="stylesheet" href="{{URL::asset('ui/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{URL::asset('ui/css/color.css')}}">
        @yield('meta')
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{URL::asset('ui/images/favicon.ico')}}">
    </head>
    <body>
        <!--Loader -->
        <div class="body-preload">
            <div class="pl-spinner2"><span></span></div>
        </div>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
            <!--main-container -->
            <div class="main-container">
                <!--header -->
                @include('inc.ui.header')
                <!--header end-->
                <!-- top-opt -->
                <div class="top-opt">
                    <div class="nav-button-wrap c_sb gradient-bg2">
                        <div class="nav-button"><span></span><span></span><span></span></div>
                    </div>
                    <div class="page-subtitle"><a href="/" class="ajax"><i class="fal fa-home"></i></a><span></span></div>
                    <a href="/" class="ajax mob-logo"><span></span><strong></strong></a>
                    <a href="{{route('contact')}}" class="ajax to_contacts"><i class="far fa-envelope"></i> ENTRER EN CONTACT</a>
                    <div class="share-btn show-share isShare gradient-bg2">
                        <span>Share</span>
                        <i class="fas fa-share-alt"></i>
                    </div>
                </div>
                <!-- top-opt end -->
                <!-- content-holder -->
                <div class="content-holder">
                    <!--wrapper -->
                    <div id="wrapper">
                        <!--scroll-bar -->
                        <div class="scr-bar_container">
                            <div class="content" data-pagetitle="About Me" data-pagesubtitle="Home">
                                <div class="bg-top"></div>
                                <div class="bg-bottom"></div>
                                <!--section   -->
                                    @yield('content')
                                <!--section end-->                							
                                <div class="to-top-wrap">
                                    <div class="to-top color-bg"><i class="fas fa-caret-up"></i></div>
                                </div>
                            </div>
                        </div>
                        <!--scroll-bar end -->
                        <!--share end -->
                        <div class="share-wrapper">
                            <div class="share-container isShare"></div>
                        </div>
                        <!--share end -->							
                    </div>
                    <!--wrapper end -->
                    <!--page-load -->	
                    <div class="page-load">
                        <div class="pl-spinner"><span></span></div>
                    </div>
                    <!--page-load end -->
                </div>
                <!-- content-holder end -->
                <!-- footer -->
                <footer class="main-footer">
                    <div class="footer-social">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright">&#169; Vbook 2022. All rights reserved.</div>
                </footer>
                <!-- footer end -->	
                <div class="nav-overlay"></div>
            </div>
            <!-- main-container end -->
            <!--body-bg -->
            <div class="body-bg">
                <div class="slider-thumb"></div>
                <div class="cavas-wrap">
                    <canvas id="liquid"></canvas>
                </div>
                <div class="dynamic-title"><span>Resume</span></div>
            </div>
            <!-- body-bg end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script  src="{{ URL::asset('ui/js/jquery.min.js')}}"></script>
        <script  src="{{ URL::asset('ui/js/plugins.js')}}"></script>
        <script  src="{{ URL::asset('ui/js/scripts.js')}}"></script>
    </body>
</html>