
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="/shop">Produits</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Details</li>
                    </ol>

                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>Avant</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                            <span>Aprés</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="{{asset('assets/images/demos/demo-4/products')}}/{{ $product->image }}" data-zoom-image="{{asset('assets/images/demos/demo-4/products/product-2.jpg')}}" alt="product image">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            @php
                                                $images = explode(",",$product->images);
                                            @endphp
                                            @foreach($images as $image)
                                                @if($image)
                                                    <a class="product-gallery-item active" href="#" data-image="{{asset('assets/images/demos/demo-4/products')}}/{{ $image }}" data-zoom-image="{{asset('assets/images/demos/demo-4/products')}}/{{ $image }}">
                                                        <img src="{{asset('assets/images/demos/demo-4/products')}}/{{ $image }}" >
                                                    </a>
                                                @endif
                                            @endforeach

                                        </div><!-- End .product-image-gallery -->
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="#">{{ $product->name }}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="">{{ $product->name }}</a></h3><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <style>
                                            .color-gray{
                                                color:#e6e6e6 !important;
                                            }
                                        </style>
                                            @php
                                                $avgrating = 0;
                                            @endphp
                                            @foreach($product->orderItems->where('rstatus',1) as $orderItem)
                                                @php
                                                    $avgrating = $avgrating + $orderItem->review->rating;
                                                @endphp
                                            @endforeach
                                            @for($i=1;$i<=5;$i++)
                                                @if($i<=$avgrating)
                                                    <i class="icon icon-star" aria-hidden="true" style="color:#fcb941; "></i>
                                                @else
                                                    <i class="icon icon-star color-gray" aria-hidden="true"></i>
                                                @endif

                                            @endfor
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        @if ($product->sale_price >0)
                                        {{ $product->regular_price }}
                                        <span class="old-price" style="margin-left:5px;text-decoration: line-through;font-size:15px;">{{ $product->sale_price }}</span>
                                        @else
                                        {{ $product->regular_price }}
                                        @endif

                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        {!! $product->short_description !!}
                                    </div><!-- End .product-content -->

                                    <div class="details-filter-row details-row-size">
                                        <label>Availability:</label>
                                        <span style="margin-left: 15px; color:#F60F17;">{{ $product->stack_status }}</span>

                                    </div><!-- End .details-filter-row -->



                                    <div class="cart-product-quantity">
                                        <div class="input-group  input-spinner">
                                            <div class="input-group-prepend">
                                                <button style="min-width: 26px" wire:click.prevent="decreaseQuantity()" class="btn btn-decrement btn-spinner" type="button">
                                                  <i class="icon-minus" >
                                                  </i>
                                              </button>
                                          </div>
                                          <input type="number" wire:model="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                          <div class="input-group-append">
                                              <button style="min-width: 26px" wire:click.prevent="increaseQuantity()" class="btn btn-increment btn-spinner" type="button">
                                                  <i class="icon-plus" ></i>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                                  <br>

                                    <div class="product-details-action">
                                        <a href="#" class="btn-product btn-cart" wire:click.prevent="store({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})"><span>Ajouter au panier</span></a>
                                        @php
                                            $witems =  Cart::instance('wishlist')->content()->pluck('id');
                                        @endphp
                                        <div class="details-action-wrapper">
                                            @if ($witems->contains($product->id))
                                                <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                            @else
                                                <a href="#" wire:click.prevent="addToWishlist({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})"  class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                            @endif
                                            <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>

                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews ({{ $product->orderItems->where('rstatus',1)->count() }})</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p>{{ $product->description }}</p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">

                                    <h3>Reviews ({{ $product->orderItems->where('rstatus',1)->count() }})</h3>
                                    <div class="review">
                                        <div class="row no-gutters">
                                            <div class="col-auto">

                                                <div class="ratings-container">
                                                    <style>
                                                        .color-gray{
                                                            color:#e6e6e6 !important;
                                                        }
                                                    </style>
                                                        @php
                                                            $avgrating = 0;
                                                        @endphp
                                                        @foreach($product->orderItems->where('rstatus',1) as $orderItem)
                                                            @php
                                                                $avgrating = $avgrating + $orderItem->review->rating;
                                                            @endphp
                                                        @endforeach
                                                        @for($i=1;$i<=5;$i++)
                                                            @if($i<=$avgrating)
                                                                <i class="icon icon-star" aria-hidden="true" style="color:#fcb941; "></i>
                                                            @else
                                                                <i class="icon icon-star color-gray" aria-hidden="true"></i>
                                                            @endif

                                                        @endfor

                                                </div><!-- End .rating-container -->

                                            </div><!-- End .col -->
                                            <div class="col">
                                                <h4>Comments</h4>
                                                @foreach ($product->orderItems->where('rstatus',1) as $orderItem )

                                                <div class="review-content">
                                                    <p> <strong style="color:#F60F17;">{{ $orderItem->order->user->name }}</strong><span>-</span><time style="font-size: 10px;"> {{ Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A') }} </time> </p>

                                                    <p>  {{ $orderItem->review->comment }}</p>

                                                </div><!-- End .review-content -->

                                                <div class="review-action">
                                                    <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                    <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                </div><!-- End .review-action -->
                                                @endforeach
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                    </div><!-- End .review -->


                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .page-content -->

            <div class="mb-6"></div><!-- End .mb-6 -->


            <div class="bg-light pt-5 pb-6">
                <div class="container trending-products">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Produits Tendance<span style="color:#F60F17;">.</span></h2><!-- End .title -->
                        </div><!-- End .heading-left -->

                       <div class="heading-right">
                            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab" role="tab" aria-controls="trending-top-tab" aria-selected="true">PLUS NOTÉ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab" role="tab" aria-controls="trending-best-tab" aria-selected="false">MEILLEURE VENTE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab" role="tab" aria-controls="trending-sale-tab" aria-selected="false">EN SOLDES</a>
                                </li>
                            </ul>
                       </div><!-- End .heading-right -->
                    </div><!-- End .heading -->

                    <div class="row">
                        <div class="col-xl-5col d-none d-xl-block">
                            <div class="banner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/demos/demo-4/banners/banner-4.jpg')}}" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-xl-5col -->

                        <div class="col-xl-4-5col">
                            <div class="tab-content tab-content-carousel just-action-icons-sm">
                                <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel" aria-labelledby="trending-top-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                        data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>

                                        @foreach ($popular_products as $p_products)

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <a href="{{ route('product.details',['slug'=>$p_products->slug]) }}">
                                                    <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $p_products->image }}" alt="{{ $p_products->name }}" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"{{ $p_products->name }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="{{ route('product.details',['slug'=>$p_products->slug]) }}">{{ $p_products->name }}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{ $p_products->regular_price }}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        @endforeach

                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->




                                <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel" aria-labelledby="trending-best-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                        data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>

                                        @foreach ($related_products as $r_products)

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Top</span>
                                                <a href="{{ route('product.details',['slug'=>$r_products->slug]) }}">
                                                    <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $r_products->image }}" alt="{{ $r_products->name }}" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"{{ $r_products->name }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="{{ route('product.details',['slug'=>$r_products->slug]) }}">{{ $r_products->name }}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{ $r_products->regular_price }}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        @endforeach

                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->



                                <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel" aria-labelledby="trending-sale-link">
                                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                        data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                        @foreach ($best_sale as $b_sale)

                                        <div class="product product-2">
                                            <figure class="product-media">
                                                <span class="product-label label-circle label-top">Solde</span>
                                                <a href="{{ route('product.details',['slug'=>$b_sale->slug]) }}">
                                                    <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $b_sale->image }}" alt="{{ $b_sale->name }}" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                                </div><!-- End .product-action -->

                                                <div class="product-action">
                                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"{{ $b_sale->name }}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="{{ route('product.details',['slug'=>$b_sale->slug]) }}">{{ $b_sale->name }}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                    {{ $b_sale->regular_price }}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 4 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->

                                        @endforeach




                                    </div><!-- End .owl-carousel -->
                                </div><!-- .End .tab-pane -->




                            </div><!-- End .tab-content -->
                        </div><!-- End .col-xl-4-5col -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-5 pb-6 -->

        </main><!-- End .main -->
