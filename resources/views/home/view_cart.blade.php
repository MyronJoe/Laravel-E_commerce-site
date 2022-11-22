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


   <div class="container p-4">

        <h5 class="ml-3 mb-2">Number of cart Products: <span class="badge bg-success p-2 text-light">{{$counter}}</span></h5>

         <div class="col-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
            @foreach($datas as $key => $data)
                @if($key < 1)
                <h5 class="card-title mb-0">Cart Product Of {{$data->name}}</h5>
                @endif
            @endforeach 
            </div>
            <table class="table table-hover my-0">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th class="d-none d-xl-table-cell">Image</th>
                        <th class="d-none d-xl-table-cell">Product Title</th>
                        <th class="d-none d-xl-table-cell">Quantity</th>
                        <th>Price</th>
                        <th class="d-none d-md-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totalPrice = 0; ?>
                    @foreach($datas as $key => $data)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td class="d-none d-xl-table-cell">
                                <img src="product/{{$data->image}}" alt="{{$data->title}}"  style="height:60px; width:60px; object-fit:cover;">
                            </td>
                            <td class="d-none d-xl-table-cell">{{$data->product_title}}</td>
                            <td><span class="badge bg-success p-2 text-light">{{$data->quantity}}</span></td>
                            <td class="d-none d-md-table-cell">${{$data->price}}</td>
                            <td class="d-none d-md-table-cell">
                                <a href="{{url('remove_cart', $data->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to remove this product...?')">Remove</a>
                            </td>
                        </tr>

                        <?php $totalPrice += $data->price; ?>

                    @endforeach    
                </tbody>
            </table>
            <div class="card-header" style="display: flex; justify-content:center; align-items:center">
                <a href="" class="btn btn-sm btn-danger">Button</a>

                <h5 class="card-title mx-4">Total Price: ${{$totalPrice}}</h5>

                <a href="" class="btn btn-sm btn-danger">Button</a>
            </div>
        </div>
    </div>


   </div>


 
    <div class="cpy_" style="position: relative; top:175px;">
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