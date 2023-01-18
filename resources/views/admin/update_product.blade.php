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
            <!-- header -->
            @include('admin.header')
            <main class="content">
                <!-- body -->
                <div class="container-fluid p-0">

                    <a style="float: right;" class="btn btn-primary mb-2" href="{{ url('view_product') }}">View Products</a>

                    <h1 style="float: left;" class="h3 mb-3 text-center"><strong>Update Product</strong></h1>

                    <div class="col-12 " style="clear:both;">

                        <form action="{{url('updateAllProducts', $data->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class=" form-group">
                                <img src="/product/{{$data->image}}" alt="{{$data->title}}" style="height:100px; width:100px; object-fit:cover;">
                            </div>
                            <div class="mt-3 form-group">
                                <label for="">Product Title</label>
                                <input type="text" class="form-control" value="{{$data->title}}" name="title" placeholder="Enter email" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label for="exampleFormControlTextarea1">Product Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required>{{$data->description}}</textarea>
                            </div>
                            <div class="mt-3 form-group">

                                <label for="exampleFormControlSelect1">Category</label>
                                <select class="form-control" name="category" id="exampleFormControlSelect1" required>
                                    <option value="{{$data->category}}" selected="">{{$data->category}}</option>
                                    @foreach($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="mt-3 form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" value="{{$data->price}}" class="form-control" placeholder="Price" required>
                            </div>
                            <div class="mt-3 form-group">
                                <label for="">Discount Price</label>
                                <input type="number" value="{{$data->discount_price}}" name="dis_price" class="form-control" placeholder="Discount Price">
                            </div>
                            <div class="mt-3 form-group">
                                <label for="">Product Quantity</label>
                                <input type="number" name="quantity" min="0" value="{{$data->quantity}}" class="form-control" placeholder="Product Quantity" required>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="exampleFormControlFile1">Choose Product Image</label><br>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>


                            <!-- <button type="submit" class="btn btn-primary mb-2">Submit</button> -->

                            <input style="background-color: navy; color:white" type="submit" class="btn btn-primary mt-4" value="Update Product">
                        </form>


                    </div>

                </div>

            </main>

            <footer class="footer">
                @include('admin.footer')
            </footer>
        </div>
    </div>

    <script src="admin/js/app.js"></script>

</body>

</html>