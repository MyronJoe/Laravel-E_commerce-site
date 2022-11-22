<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="home/images/favicon.png" type="">
    <title>Myron Stores</title>
    @include('home.css')
</head>

<body>
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->


    <div class="details">

        <div class="row">
            <div class="col-sm-12 col-md-6">

                <img src="" alt="">

            </div>


            <div class="col-sm-12 col-md-6">

                <h2>{{$product->title}}</h2>

            </div>
        </div>


    </div>


 
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By Myron Stores

        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html>