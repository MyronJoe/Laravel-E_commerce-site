<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach($product as $product)
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="category">
                        <p class="bg-danger px-3 py-1 text-light">category: {{$product->category}}</p>

                        <h6 class="bg-danger px-3 py-1 text-light mt-1">
                            Price:
                            <span style="text-decoration: line-through;">${{$product->price}}</span>
                        </h6>
                    </div>
                    <div class="option_container">
                        <div class="options">
                            <a href="" class="option1">
                                Men's Shirt
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
                        <h6>
                            D-Price:
                            {{$product->discount_price}}
                        </h6>
                        
                    </div>
                </div>
            </div>
            @endforeach
        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
    </div>
</section>