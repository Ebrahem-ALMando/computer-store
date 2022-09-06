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

    <!-- MAIN HERO END  -->


    <!-- PRESENTATION START  -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto mb-4 ">
                <h1 class="h1">Products By Category</h1>
                    <p>
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">

                    @foreach($products as $product)

                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="productimage/{{$product->image}}" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a>{{$product->category->name}}</a></h3>
                                    <p class="mb-0"><a  href="{{url('one-product_view',$product->id)}}" class="btn btn-primary text-light"> {{$product->name}}</a>
                                    </p>
                                    <p class="mb-0">{{$product->excerpt}}</p>
                                    <p class="text-primary font-weight-bold">{{$product->price}} $</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
       </div>
            </div>
        </div>
    </section>
    <!-- PRESENTATION END  -->
    <!-- SERVICES START  -->




    <!-- COLLECTION START  -->

    <!-- COLLECTION END  -->


    <!-- SLIDER START  -->

    <!-- SLIDER END  -->


    <!-- Offer Start -->

    <!-- Offer End -->

    <!-- ABOUT SECTION  -->

    <!-- ABOUT SECTION  END-->

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
