<!DOCTYPE html>
<html lang="en">

<base href="/public">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - PDF</title>
    <style>
        * {
            font-family: 'Trebuchet MS';
        }
    </style>
</head>

<body>
    <div class="order">

        <h1 style="background: navy; color:white; padding:.3em 1em; ">Myron Stores</h1>

        <h2>Order Details</h2>

        <!-- product/{{$order->image}} -->

        <img src="{{ public_path('product/'.$order->image) }}" style="height:180px; object-fit:cover;">

        <h3 class="d-xl-table-cell">Customer Name: {{$order->name}}</h3>
        <h3 class="">Customer Email: {{$order->email}}</h3>
        <h3 class=""> Customer Phone Number: {{$order->phone}}</h3>
        <h3 class="">Customer Address: {{$order->address}}</h3>
        <h3 class="">Customer ID: {{$order->user_id}}</h3>

        <h3 class="">Product Name: {{$order->product_title}}</h3>
        <h3>Product Quantity: {{$order->quantity}}</h3>
        <h3 class="">Product Amount: {{$order->price}}</h3>
        <h3 class="">Product ID: {{$order->product_id}}</h3>
        <h3 class="">Payment Status: {{$order->payment_status}}</h3>



    </div>
</body>

</html>