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
                            <a href="" class="option2">
                                Buy Now
                            </a>
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
                            D-Price:
                            ${{$product->discount_price}}
                        </h6>
                        @else
                            Price:
                            ${{$product->price}}
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