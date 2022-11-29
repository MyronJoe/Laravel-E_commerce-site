<!DOCTYPE html>
<html lang="en">

<base href="/public">
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

                    <h1 class="h3 mb-3 text-center"><strong>Send Mail to {{$order->email}}</strong></h1>

                    <div class="col-12 ">

                        <form action="{{url('send_user_email', $order->id)}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="mt-3 form-group">
                                <label for="">Greeting</label>
                                <input type="text" class="form-control" name="greeting" placeholder="Greeting" required>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="">First Line</label>
                                <input type="text" name="firstline" class="form-control" placeholder="First Line" required>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="exampleFormControlTextarea1">Mail Content</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required placeholder="Enter email content"></textarea>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="">Button</label>
                                <input type="text" name="button" class="form-control" placeholder="Button Value" required>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="">Url</label>
                                <input type="text" name="url" class="form-control" placeholder="url" required>
                            </div>

                            <div class="mt-3 form-group">
                                <label for="">Last Line</label>
                                <input type="text" name="lastline" class="form-control" placeholder="Last Line" required>
                            </div>

                            <input style="background-color: navy; color:white" type="submit" class="btn btn-primary mt-4" value="Send Mail">
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