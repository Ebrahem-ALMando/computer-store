

<!-- HEADER START  -->
<header class="site-navbar" role="banner" id="header">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="" class="site-block-top-search">
                        <span class="icon icon-search2"></span>
                        <input type="text" class="form-control border-0" placeholder="Search">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="" class="js-logo-clone">Shoppers</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <li><a href="#"><span class="icon icon-person"></span></a></li>
                            <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                            <li>
                                <a href="" class="site-cart">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="count">2</span>
                                </a>
                            </li>
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
                <li class="has-children active">
                    <a href="#">Home</a>
                    <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                        <li class="has-children">
                            <a href="#">Sub Menu</a>
                            <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="about.html">About</a>
                    <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                    </ul>
                </li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Catalogue</a></li>
                <li><a href="#">New Arrivals</a></li>
                <li><a href="contact.html">Contact</a></li>
                @if(Route::has('login'))
                    @auth
                        <li>
                            <x-app-layout>
                            </x-app-layout>
                        </li>

                    @else
                        <li style="margin-left:10%"><a class="btn btn-success text-white"  href="{{url('login')}}">Login</a> </li>
                        <li style="margin-left:5%"><a class="btn btn-success text-white" href="{{url('register')}}">Register</a></li>
                    @endauth
                @endif
                <li style="margin-left:5%"><a class="btn btn-success text-white" onclick="changecolor()">Change Color</a>
                    <a class="btn btn-success text-white" onclick="stopchangcolor()">Stop Change Color</a></li>
                <li style="margin-left:1%"></li>

            </ul>
        </div>
    </nav>
</header>
<script>
    function stopchangcolor()
    {
        window.location.reload();
    }
    function changecolor()
    {
        var item=document.querySelector('#body');
        var item_h=document.querySelector('#header');
        var item_f=document.querySelector('#foteer');
        const array = ['rgba(83,150,117,0.83)', 'rgba(160,134,180,0.77)', '#81a66e', 'rgba(107,161,157,0.85)', '#2f5997eb','#5600ffe8','#5400ffe1','#3210ffe1'];
        setInterval(()=>{
            let random=Math.floor(Math.random() * array.length);
            item.style.backgroundColor=array[random+1];
            item.style.color=array[random];
            item_h.style.backgroundColor=array[random+2];
            item_h.style.color=array[random];
            item_f.style.backgroundColor=array[random+3];
            item_f.style.color=array[random];
        },2000);
    }
</script>
