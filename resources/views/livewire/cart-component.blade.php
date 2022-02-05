<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ asset('assets/images/page-header-bg.jpg') }}')">
        <div class="container">
            <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/shop">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    @if(Cart::instance('cart')->count() > 0)
                    <div class="col-lg-9">
                        @if(Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success</strong> {{ Session::get('success_message') }}
                        </div>
                        @endif
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                @if(Cart::instance('cart')->count() > 0)
                                @foreach (Cart::instance('cart')->content() as $item)
                                <tr>

                                    <td class="product-col">
                                       <!-- End .product-title -->
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $item->model->image }}" alt="{{ $item->model->name }}">
                                                </a>
                                            </figure>
                                            <h3 class="product-title">
                                                <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">{{ $item->model->name }}</a>
                                            </h3>

                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{ $item->model->regular_price}}TN</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                              <div class="input-group  input-spinner">
                                                  <div class="input-group-prepend">
                                                      <button style="min-width: 26px" wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')" class="btn btn-decrement btn-spinner" type="button">
                                                        <i class="icon-minus" >
                                                        </i>
                                                    </button>
                                                </div>
                                                <input type="number" value="{{ $item->qty}}" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                                <div class="input-group-append">
                                                    <button style="min-width: 26px" wire:click.prevent="increaseQuantity('{{ $item->rowId }}')" class="btn btn-increment btn-spinner" type="button">
                                                        <i class="icon-plus" ></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <p class="text-center"><a href="#" wire:click.prevent="switchToSaveForLater('{{ $item->rowId }}')">Save For Later</a></p>
                                        </div><!-- End .cart-product-quantity -->

                                    </td>
                                    <td class="total-col">{{ $item->subtotal }}</td>
                                    <td class="remove-col"><button class="btn-remove" wire:click.prevent="destroy('{{ $item->rowId }}')"><i class="icon-close"></i></button></td>

                                </tr>
                                @endforeach
                                @else
                                    <p>No item in Cart</p>
                                @endif


                            </tbody>
                        </table><!-- End .table table-wishlist -->

                        <div class="cart-bottom">
                            @if (!Session::has('coupon'))
                                <div class="cart-discount">
                                    <div class="custom-control custom-radio">
                                        <input type="checkbox" id="have-code" name="have-code" class="custom-control-input" value="1" wire:model="havecouponcode">
                                        <label class="custom-control-label" for="have-code">I have coupon code</label>
                                    </div><!-- End .custom-control -->
                                    @if ($havecouponcode == 1)
                                        <form wire:submit.prevent='applyCouponCode'>
                                            @if (Session::has('coupon_message'))
                                                <div class="alert alert-danger">
                                                    {{ Session::get('coupon_message') }}
                                                </div>
                                            @endif
                                            <div class="input-group">
                                                <input type="text" class="form-control"  placeholder="coupon code" wire:model="couponcode">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                                </div><!-- .End .input-group-append -->
                                            </div><!-- End .input-group -->
                                        </form>
                                    @endif
                                </div><!-- End .cart-discount -->
                            @endif

                            <a href="#" class="btn btn-outline-dark-2" wire:click.prevent="destroyAll()"><span>CLEAR CART</span><i class="icon-refresh"></i></a>
                            <a href="#" class="btn btn-outline-dark-2" wire:click.prevent="destroyAll()"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="summary summary-cart">
                            <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                            <table class="table table-summary">
                                <tbody>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>{{ Cart::instance('cart')->subtotal() }}DT</td>
                                    </tr><!-- End .summary-subtotal -->

                                    @if (Session::has('coupon'))
                                        <tr class="summary-subtotal">
                                            <td>Discount ({{ Session::get('coupon')['code'] }})<a wire:click.prevent="removeDiscount"><i class="icon-close" style="color: red;"></i></a></td>
                                            <td>-{{ number_format($discount,2) }}DT</td>
                                        </tr>
                                        <tr class="summary-subtotal">
                                            <td>Tax ({{ config('cart.tax') }}%)</td>
                                            <td>{{ number_format($taxAfterDiscount,2) }}DT</td>
                                        </tr>
                                        <tr class="summary-subtotal">
                                            <td>Subtotal with Discount</td>
                                            <td>{{ number_format($subtotalAfterDiscount,2) }}DT</td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td>Total</td>
                                            <td>{{ number_format($totalAfterDiscount,2) }}DT</td>
                                        </tr>
                                    @else
                                        <tr class="summary-subtotal">
                                            <td>Tax:</td>
                                            <td>{{ Cart::instance('cart')->tax() }}DT</td>
                                        </tr>
                                        <tr class="summary-shipping">
                                            <td>Shipping:</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="checkbox" id="free-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="free-shipping">Free Shipping</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>0.00</td>
                                        </tr><!-- End .summary-shipping-row -->

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="checkbox" id="standart-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="standart-shipping">Standart:</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>10.00</td>
                                        </tr><!-- End .summary-shipping-row -->

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="checkbox" id="express-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="express-shipping">Express:</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>20.00</td>
                                        </tr><!-- End .summary-shipping-row -->
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>{{ Cart::instance('cart')->total() }}DT</td>
                                        </tr><!-- End .summary-total -->
                                    @endif

                                </tbody>
                            </table><!-- End .table table-summary -->

                            <a href="#" wire:click.prevent="checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                        </div><!-- End .summary -->

                        <a href="/shop" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                    </aside><!-- End .col-lg-3 -->
                    @else

                        <div class="text-center" style="padding: 30px 0;" >
                            <h1 >Your Cart is empty!</h1>
                            <p > Add items to it now</p>
                            <a href="/shop" class="btn btn-danger">Shop Now</a>
                        </div>

                    @endif

                    <div class="col-lg-9">
                        <h3 class="title-box" style="border-bottom: 1px solid;padding-bottom:15px;">{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h3>
                        @if(Session::has('s_success_message'))
                        <div class="alert alert-success">
                            <strong>Success</strong> {{ Session::get('s_success_message') }}
                        </div>
                        @endif
                        <table class="table table-cart table-mobile">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                @if(Cart::instance('saveForLater')->count() > 0)
                                @foreach (Cart::instance('saveForLater')->content() as $item)
                                <tr>

                                    <td class="product-col">
                                       <!-- End .product-title -->
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $item->model->image }}" alt="{{ $item->model->name }}">
                                                </a>
                                            </figure>
                                            <h3 class="product-title">
                                                <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">{{ $item->model->name }}</a>
                                            </h3>

                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">{{ $item->model->regular_price}}TN</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">

                                            <p class="text-center"><a href="#" wire:click.prevent="moveToCart('{{ $item->rowId }}')">Move To Cart</a></p>
                                        </div><!-- End .cart-product-quantity -->

                                    </td>
                                    <td class="total-col">{{ $item->subtotal }}</td>
                                    <td class="remove-col"><button class="btn-remove" wire:click.prevent="deleteFromSavedForLater('{{ $item->rowId }}')"><i class="icon-close"></i></button></td>

                                </tr>
                                @endforeach
                                @else
                                    <p>No item saved for later</p>
                                @endif


                            </tbody>
                        </table><!-- End .table table-wishlist -->


                    </div><!-- End .col-lg-9 -->



                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
