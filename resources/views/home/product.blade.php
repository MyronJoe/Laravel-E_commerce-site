<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="category">
                        <p class="bg-danger px-3 py-1 text-light">category: {{$product->category}}</p>

                        @if($product->discount_price != null)
                            <h6 class="bg-danger px-3 py-1 text-light mt-1">
                                Price:
                                <span style="text-decoration: line-through;">${{$product->price}}</span>
                            </h6>
                        @else
                            <h6 class="bg-danger px-3 py-1 text-light mt-1">
                                Price:
                                <span>${{$product->price}}</span>
                            </h6>
                        @endif
                    </div>
                    <div class="option_container">
                        <div class="options">
                            <a href="{{url('product_detail', $product->id)}}" class="option1">
                                Product Details
                            </a>


                            <form action="{{url('add_cart', $product->id)}}" method="POST">

                                @csrf
                                
                                <input type="number" style="width: 60px; margin-left:50px" min="1" name="quantity" value="1">

                                <input type="submit" value="Add to cart" style="border-radius: 60px;">

                            </form>

                        </div>
                    </div>
                    <div class="img-box">
                        <img src="product/{{$product->image}}" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            {{$product->title}}
                        </h5>
                        @if($product->discount_price != null)
                        <h6>
                            Discount Price:
                            <br>
                            ${{$product->discount_price}}
                        </h6>
                        @else
                            <h6>
                            Price:
                            ${{$product->price}}
                            </h6>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach

            
        <div class="mt-3 text-center" style="width: 300px; margin:auto;">
            {!!$products->withQueryString()->links('pagination::bootstrap-5')!!}
        </div>
    </div>
</section>