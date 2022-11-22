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
    <style>
        .font{
            font-family:'Trebuchet MS';
        }
    </style>
</head>

<body>
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->


    <div class="details container" style="font-family:'Trebuchet MS';">

        <div class="row p-5">
            <div class="col-sm-12 col-md-6 p-5">

                <img src="product/{{$product->image}}" alt="" style="width: 100%;">

            </div>


            <div class="col-sm-12 col-md-6">

                <h1 class="text-center font" >Product Details</h1>

                <h2 class="font">Title: {{$product->title}}</h2>

                <h2 class="font">Description: {{$product->description}}</h2>

                <h2 class="font">Category: {{$product->category}}</h2>

                <h2 class="font">Price: ${{$product->price}}</h2>

                <h2 class="font">Discount Price: ${{$product->discount_price}}</h2>

                <h2 class="font">Quantity: {{$product->quantity}}</h2>


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