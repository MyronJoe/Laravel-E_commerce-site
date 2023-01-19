<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Myron-Ecommerce-Admin</title>

    <link rel="shortcut icon" href="{{ asset('admin/img/icons/icon-48x48.png') }}" />
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <!-- sidebar-header -->
        @include('admin.sidebar')

        <div class="main">
            @include('admin.header')

            <main class="content">
                <div class="container-fluid p-0">

                    <a style="float: right;" class="btn btn-primary mb-2" href="{{ url('add_product') }}">Add Product</a>

                    <h1 class="h3 mb-3 text-center"><strong>All Products</strong></h1>

                    <div class="col-12 d-flex">
                        <div class="card flex-fill" style="overflow-x: auto;">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Products</h5>
                            </div>
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th class="">Category</th>
                                        <th class="">Quantity</th>
                                        <th>Price</th>
                                        <th class="">Discount Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td class="">
                                            <img src="/product/{{$product->image}}" alt="{{$product->title}}" style="height:60px; width:60px; object-fit:cover;">
                                        </td>
                                        <td class="">{{$product->title}}</td>
                                        <td class="">{{$product->category}}</td>
                                        <td><span class="badge bg-success">{{$product->quantity}}</span></td>
                                        <td class="">{{$product->price}}</td>
                                        <td class="">{{$product->discount_price}}</td>
                                        <td class="">
                                            <a href="{{url('update_product', $product->id)}}" class="btn btn-info">Edit</a>

                                            <a href="{{url('delete_product', $product->id)}}" class="btn btn-danger" onclick="return confirm('Do you want to delete this..?')">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
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