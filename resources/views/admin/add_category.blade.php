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

                    <a style="float: right;" class="btn btn-primary mb-2" href="{{ url('view_category') }}">View Category</a>

                    <h1 class="h3 mb-3 text-center"><strong>Add Category</strong></h1>

                    <div class="col-12 ">
                        <form action="{{url('/add_categories')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" class="form-control" name="category_name" placeholder="Enter Category">
                            </div>
                            <input style="background-color: navy; color:white" type="submit" class="btn btn-primary mt-2" value="Add Category">
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