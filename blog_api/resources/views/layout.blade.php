<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

        <!-- SEO -->
        <link  rel="canonical" content="{{$url_canonical}}"/>
        <meta property="og:image" content=""/>
        <meta name="author" content="Blog">
        <meta property="og:type" content="website"/>
        <meta property="og:site_name" content="{{$url_canonical}}"/>
        <meta property="og:url"content="{{$url_canonical}}"/>

        <title>BLOG MUSIC</title>

        <link id="favicon" rel="shortcut icon" href="{{asset('public/images/blog_music.ico')}}">
        <link href="//db.onlinewebfonts.com/c/314107d2b4fd9c91314be5b4cccb08f6?family=Raleway" rel="stylesheet" type="text/css"/>



       
        <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('css/new_style.css')}}" rel='stylesheet' type='text/css' />


    </head>
<body>
    <!--header-top-starts-->
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <a href="{{url('/')}}"><img src="{{asset('images/logo-1.png')}}" alt="" height="150px" /></a>
            </div>
        </div>
    </div>
    <!--header-top-end-->

    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">
            <div class="navigation collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <span class="menu"></span> 
                    <ul class="navig">
                        <li><a href="{{url('/')}}"  class="{{ url('/') == $url_canonical ? 'active' : '' }}">Trang chủ</a></li>
                        <li class="dropdown">
                          <button class="dropbtn">Danh mục</button>
                          <div class="dropdown-content">
                            @foreach($category as $cate)
                            <a href="{{route('danh-muc.show',['id'=>$cate->id , 'slug'=>Str::slug($cate->title_category)])}}" style="text-transform: capitalize;">{{$cate->title_category}}</a>
                            @endforeach
                          </div>
                        </li>
                        <li><a href="{{route('gioi-thieu.index')}}" class="{{ route('gioi-thieu.index') == $url_canonical ? 'active' : '' }}">Giới thiệu</a></li>
                        <li><a href="{{route('lien-he.index')}}" class="{{ route('lien-he.index') == $url_canonical ? 'active' : '' }}">Liên hệ</a></li>

                    </ul>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <form action="{{route('tim-kiem.index')}}" method="GET">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" name="tukhoa">
                        <input type="submit" value="">
                    </form>
                </div>
                <ul>
                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{$url_canonical}}&amp;src=sdkpreparse"><span class="fb"> </span></a></li>
                    <li><a href="http://twitter.com/share?url={{$url_canonical}}"><span class="twit"> </span></a></li>
                    <li><a href="http://pinterest.com/pin/create/button/?url={{$url_canonical}}&description={{$description_home}}&media={{$image_og_home}}"><span class="pin"> </span></a></li>
                    <li><a href="#"><span class="rss"> </span></a></li>
                </ul>
            </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>  

    @include('pages.banner')
    <!--about-starts-->
    @yield('content')
    <!--about-end-->
    <!--slide-starts-->
    <div class="slide">
        <div class="container">
            <div class="fle-xsel">
            <ul id="flexiselDemo3" >
                @foreach($post_image as $pts)
                <li style="height: 100px">
                    <a href="#">
                        <div class="banner-1">
                            <img src="{{asset('public/uploads/'.$pts->image)}}" class="img-responsive" alt="{{Str::slug($pts->title_post)}}" width="200px" height="100px">
                        </div>
                    </a>
                </li> 
                @endforeach            
            </ul>
                            

            <div class="clearfix"> </div>
            </div>
        </div>
    </div>  
    <!--slide-end-->
    <!--footer-starts-->
    <div class="footer">
        <div class="container">
            <div class="footer-text">
                <p>© 2021 Blog Music. All Rights Reserved | Design by  <a href="{{$url_canonical}}" target="_blank">Blog Music</a> </p>
            </div>
        </div>
    </div>
    <!--footer-end-->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->

    <script type="text/javascript">
        $(window).load(function() {
            
            $("#flexiselDemo3").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 2
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 3
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
    <!-- script-for-menu -->
    <script>
        $("span.menu").click(function(){
            $(" ul.navig").slideToggle("slow" , function(){
            });
        });
    </script>
    <!-- script-for-menu -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=1058587627960870&autoLogAppEvents=1" nonce="fpODWmFY"></script>

</body>

</html>
