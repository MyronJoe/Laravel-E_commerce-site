<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Myron Stores</title>
    @include('home.css')
    <style>
        .font {
            font-family: 'Trebuchet MS';
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

                <img src="/product/{{$product->image}}" alt="" style="width: 100%; height:270px; object-fit:cover;">

            </div>


            <div class="col-sm-12 col-md-6 py-5">

                <h1 class="text-center font bg-danger px-3 py-1 text-light mt-1">Product Details</h1>

                <div class="detail-box">
                    <h5 class="mt-2">
                        Title: {{$product->title}}
                    </h5>

                    <h6 class="mt-2">Description: {{$product->description}}</h6>

                    <h6 class="mt-2">category: {{$product->category}}</h6>


                    <h6 class="mt-2">Price: ${{$product->price}}</h6>

                    @if($product->discount_price != null)
                    <h6 class="mt-2">
                        Discount Price:
                        ${{$product->discount_price}}
                    </h6>
                    @endif

                    <h6 class="mt-2">Available Quantity: {{$product->quantity}}</h6>
                </div>


                <form action="{{url('add_cart', $product->id)}}" method="POST" class="mt-4">

                    @csrf

                    <input type="number" class="mr-3 mt-1" style="width: 60px; float:left;" min="1" name="quantity" value="1">

                    <input type="submit" value="Add to cart" style="border-radius: 60px; float:left;">

                </form>
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