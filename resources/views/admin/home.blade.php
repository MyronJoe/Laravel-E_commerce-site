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
                @include('admin.body')

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