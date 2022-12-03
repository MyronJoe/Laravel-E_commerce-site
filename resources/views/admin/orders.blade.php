<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="admin/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Myron-Ecommerce-Admin</title>

    <link href="admin/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar-header -->
        @include('admin.sidebar')

        <div class="main">
            <!-- header -->
            @include('admin.header')


            <main class="content">
                <!-- body -->
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3 text-center"><strong>All Orders</strong></h1>

                    <form action="{{url('search')}}" method="GET" class="d-flex pb-3">
                        @csrf
                        <input type="text" class="form-control" name="search" placeholder="Search item">

                        <input style="background-color: navy; color:white" type="submit" class="btn btn-primary " value="Search">
                    </form>

                    <div class="col-12 d-flex">
                        <div class="card flex-fill" style="overflow-x: auto;">
                            <div class="card-header">


                                @if($searchedWord != null)
                                <h5 class="card-title mb-0">You searched for {{$searchedWord}}</h5>
                                @else
                                <h5 class="card-title mb-0">Orders</h5>
                                @endif
                            </div>
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th class="">Product Title</th>
                                        <th class="">Quantity</th>
                                        <th>Price</th>
                                        <th>Payment Status</th>
                                        <th>Delivery Status</th>
                                        <th>Delivered</th>
                                        <th>Print PDF</th>
                                        <th>Send Mail</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse($orders as $key => $order)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td class="">
                                            <img src="product/{{$order->image}}" alt="{{$order->title}}" style="height:60px; width:60px; object-fit:cover;">
                                        </td>
                                        <td class="d-xl-table-cell">{{$order->name}}</td>
                                        <td class="">{{$order->email}}</td>
                                        <td class="">{{$order->phone}}</td>
                                        <td class="">{{$order->address}}</td>
                                        <td class="">{{$order->product_title}}</td>
                                        <td><span class="badge bg-success">{{$order->quantity}}</span></td>
                                        <td class="">{{$order->price}}</td>

                                        @if($order->delivery_status == 'Delivered')
                                        <td class="">
                                            <a href="#" class="btn btn-success">{{$order->payment_status}}</a>

                                        </td>
                                        @else
                                        <td class="">
                                            <a href="#" class="btn btn-info">{{$order->payment_status}}</a>

                                        </td>
                                        @endif

                                        @if($order->delivery_status == 'Delivered')
                                        <td class="">
                                            <a href="#" class="btn btn-primary">{{$order->delivery_status}}</a>
                                        </td>
                                        @else
                                        <td class="">
                                            <a href="#" class="btn btn-danger">{{$order->delivery_status}}</a>
                                        </td>
                                        @endif

                                        @if($order->delivery_status == 'Delivered')
                                        <td class="">
                                            <a>Delivered</a>
                                        </td>
                                        @else
                                        <td class="">
                                            <a onclick="return confirm('Are you sure you want to change the delivery status...?')" class="btn btn-warning" href="{{url('deliverd', $order->id)}}">Deliver</a>
                                        </td>
                                        @endif

                                        <td class="">
                                            <a onclick="return confirm('Do you want to print PDF...?')" class="btn btn-secondary" href="{{url('print_pdf', $order->id)}}">Print</a>
                                        </td>

                                        <td class="">
                                            <a onclick="return confirm('Do you want to Send Mail...?')" class="btn btn-secondary" href="{{url('send_mail', $order->id)}}">Mail</a>
                                        </td>

                                    </tr>

                                    @empty

                                    <tr>
                                        <td colspan="7">
                                            <h1>No data found</h1>
                                        </td>
                                    </tr>

                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>

            </main>

            <footer class="footer">
                <!-- footer -->
                @include('admin.footer')

            </footer>
        </div>
    </div>

    <script src="admin/js/app.js"></script>

</body>

</html>