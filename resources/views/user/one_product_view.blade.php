<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <title>Bootstrap 5 e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body id="body">


<div class="site-wrap">


    @include('user.header');
    <!-- HEADER END  -->


    <!-- MAIN HERO START  -->
    <div class="site-blocks-cover" style="background-image: url(productimage/{{$oneproduct->image}});" data-aos="fade">
        <div class="container">
            <div class="row align-items-start ">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0 ">
                    <h1 class="mb-2 text-white">{{$oneproduct->name}}</h1>
                    <h3 class="mb-2 text-red-500" > {{$oneproduct->price}} $</h3>
                    <h5 class="mb-2 text-white">{{$oneproduct->status}}</h5>
                    <h5 class="mb-2 text-white">{{$oneproduct->availability}}</h5>
                    <h5 class="mb-2 text-white">{{$oneproduct->excerpt}}</h5>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4 text-white">{{	$oneproduct->description}} </p>
                        <p>
                            <a href="#" class="btn btn-sm btn-info">Bay Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN HERO END  -->




    <!-- FOOTER START  -->
    @include('user.footer')
    <!-- Footer End -->
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>
</html>
