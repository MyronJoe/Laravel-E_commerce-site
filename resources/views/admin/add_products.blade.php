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

                    <a style="float: right;" class="btn btn-primary mb-2" href="{{ url('product') }}">View Products</a>

                    <h1 class="h3 mb-3 text-center"><strong>Add Product</strong></h1>

                    <div class="col-12 ">

                        <form action="{{url('addAllProducts')}}" method="POST" enctype="multipart/form-data">
                            <div class="mt-3 form-group">
                                <label for="">Product Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter email">
                            </div>

                            <div class="mt-3 form-group">
                                <label for="exampleFormControlTextarea1">Product Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="exampleFormControlSelect1">Category</label>
                                <select class="form-control" name="category" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="1">5</option>
                                </select>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control" placeholder="Price">
                            </div>

                            <div class="mt-3 form-group">
                                <label for="">Discount Price</label>
                                <input type="number" name="dis_price" class="form-control" placeholder="Discount Price">
                            </div>

                            <div class="mt-3 form-group">
                                <label for="exampleFormControlFile1">Product Image</label><br>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            

                            <!-- <button type="submit" class="btn btn-primary mb-2">Submit</button> -->

                            <input style="background-color: navy; color:white" type="submit" class="btn btn-primary mt-4" value="submit">
                        </form>


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