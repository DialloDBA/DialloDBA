<header class="main-header">
    <div class="header-titile">
        <h1>DIALLO Abdourahamane</h1>
        <h4>Gestionnaire Informaticien</h4>
    </div>
    <a data-src="{{asset('ui/images/main.jpg')}}" class="image-popup header-popup color-bg"><i class="fal fa-plus"></i></a>
    <div class="header-titile-img">
        <div class="bg"  data-bg="{{asset('ui/images/main.jpg')}}" ></div>
    </div>
    <div class="main-menu-wrap">
        <!-- nav -->
        <nav class="nav-inner fl-wrap" id="menu">
            <ul>
                <li><a href="/" class="ajax"><i class="fal fa-home"></i> Home</a></li>
                <li><a href="{{route('contact')}}" class="ajax"><i class="fal fa-address-card"></i> Resume</a></li>
                <li><a href="{{route('portfolio')}}" class="ajax"><i class="fal fa-images"></i> Portfolio</a></li>
                <li><a href="{{route('contact')}}" class="ajax"><i class="fal fa-envelope"></i> Contacts</a></li>
                <li><a href="{{route('blog')}}" class="ajax"><i class="fal fa-book"></i> Blog</a></li>
                <li>
                    <a href="#"><i class="fal fa-layer-group"></i> Pages</a>
                    <!--level 2 -->
                    <ul>
                        <li><a href="portfolio-single.html" class="ajax">Portfolio Single</a></li>
                        <li><a href="portfolio-single2.html" class="ajax">Portfolio Single 2</a></li>
                        <li><a href="blog-single.html" class="ajax">Blog Single</a></li>
                        <li><a href="404.html" class="ajax">404</a></li>
                    </ul>
                    <!--level 2 end -->
                </li>
            </ul>
        </nav>
        <!-- nav end-->
    </div>
    <a href="#" download="" class="header_btn gradient-bg"><i class="fas fa-download"></i> Télécharger CV</a>
</header>