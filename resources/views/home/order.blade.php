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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Myron Stores - orders</title>
    @include('home.css')
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <h1 style="text-align: center; margin-bottom:30px; font-size:35px; font-family:'Trebuchet MS';">All Orders By {{Auth::user()->name}}</h1>

        <div class="col-12 d-flex">

            <div class="card flex-fill" style="overflow-x: auto;">
                <div class="card-header">

                    <h5 class="card-title mb-0">Orders By {{Auth::user()->name}}: <span class="badge badge-danger">{{$orderNum}}</span></h5>

                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Image</th>
                            <th class="">Product Title</th>
                            <th>Price</th>
                            <th class="">Quantity</th>
                            <th class="">Payment Status</th>
                            <th class="">Delivery Status</th>
                            <th>Cancel</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($order as $key => $order)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td class="">
                                <img src="product/{{$order->image}}" alt="{{$order->title}}" style="height:60px; width:60px; object-fit:cover;">
                            </td>
                            <td class="">{{$order->product_title}}</td>
                            <td class="">{{$order->price}}</td>
                            <td><span class="badge bg-success">{{$order->quantity}}</span></td>
                            <td class="">{{$order->payment_status}}</td>
                            <td class="">{{$order->delivery_status}}</td>

                            @if($order->delivery_status != 'Processing')
                            <td class="">
                                <a href="#">Not Allowed</a>
                            </td>
                            @else
                            <td class="">
                                <a onclick="return confirm('Do you want to cancel this order...?')" class="btn btn-danger" href="{{url('cancel_order', $order->id)}}">Cancel</a>
                            </td>
                            @endif


                        </tr>


                        @endforeach
                    </tbody>

                </table>
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