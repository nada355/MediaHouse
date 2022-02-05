<div>

    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-header mb-5">
                        <div class="row">

                            <div class="col-md-3 header-right">
                                <a href="{{ route('admin.orders') }}" class="btn btn-success header-right">All orders</a>
                            </div>

                    </div>
                    <div class="col-md-9">
                    <div class="panel-body">
                        <h4>Ordere Details</h4>

                        <div class="row">

                        <div class="col-lg-9">
                            <table class="table table-stripted">
                                <tbody>
                                    <tr>
                                        <th>Order Id</th>
                                            <td>{{ $order->id }}</td>
                                        <th>Order Date</th>
                                            <td>{{ $order->created_at}}</td>
                                        <th>Status</th>
                                            <td>{{ $order->status }}</td>
                                        @if ($order->status == "delivered")
                                            <th>Delivery Date</th>
                                            <td>{{ $order->delivered_date }}</td>
                                        @elseif ($order->status == "canceled")
                                            <th>Cancel Date</th>
                                            <td>{{ $order->canceled_date }}</td>
                                        @endif

                                    </tr>
                                </tbody>

                            </table><!-- End .table table-wishlist -->
                        </div><!-- End .col-lg-9 -->

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

        </div>




        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-header mb-5">

                    </div>

                    <div class="panel-body">
                        <h4>Orders Items</h4>

                        <div class="row">

                        <div class="col-lg-9">
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
                                    @foreach ($order->orderItems as $item)
                                    <tr>
                                        <td class="product-col">
                                           <!-- End .product-title -->
                                            <div class="product">
                                                <figure class="product-media">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $item->product->image }}" alt="{{ $item->product->name }}">
                                                    </a>
                                                </figure>
                                                <h3 class="product-title">
                                                    <a href="{{ route('product.details',['slug'=>$item->product->slug]) }}">{{ $item->product->name }}</a>
                                                </h3>

                                            </div><!-- End .product -->
                                        </td>
                                        <td class="price-col">{{ $item->price}}TN</td>
                                        <td class="quantity-col">
                                            <div class="cart-product-quantity">

                                                <h3 class="text-center">{{ $item->quantity }}</h3>
                                            </div><!-- End .cart-product-quantity -->
                                        </td>
                                        <td class="total-col">
                                            {{ $item->price * $item->quantity }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table><!-- End .table table-wishlist -->
                        </div><!-- End .col-lg-9 -->
                        <div class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Order summary</h3>
                                <h6 class="summary-subtotal">Subtotal:</h6><span>{{($order->subtotal)}}DT</span>
                                <h6 class="summary-shipping">Tax: </h6><span>{{($order->tax)}}</span>
                                <h6 class="summary-shipping">Shipping:</h6> <span>Free shipping</span>
                                <h6 class="summary-total">Total: </h6><span>{{($order->total)}}DT</span>


                            </div><!-- End .summary -->

                        </div><!-- End .col-lg-3 -->
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>Billing Details</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $order->firstname }}</td>

                                    <th>Last Name</th>
                                    <td>{{ $order->lastname }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{ $order->mobile }}</td>

                                    <th>Email</th>
                                    <td>{{ $order->email }}</td>
                                </tr>
                                <tr>
                                    <th>Line1</th>
                                    <td>{{ $order->line1 }}</td>

                                    <th>Line2</th>
                                    <td>{{ $order->line2 }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $order->city }}</td>

                                    <th>Province</th>
                                    <td>{{ $order->province }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $order->country }}</td>

                                    <th>Zipcode</th>
                                    <td>{{ $order->zipcode }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        @if ($order->is_shipping_different)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>Shipping Details</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>First Name</th>
                                    <td>{{ $order->shipping->firstname }}</td>

                                    <th>Last Name</th>
                                    <td>{{ $order->shipping->lastname }}</td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td>{{ $order->shipping->mobile }}</td>

                                    <th>Email</th>
                                    <td>{{ $order->shipping->email }}</td>
                                </tr>
                                <tr>
                                    <th>Line1</th>
                                    <td>{{ $order->shipping->line1 }}</td>

                                    <th>Line2</th>
                                    <td>{{ $order->shipping->line2 }}</td>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <td>{{ $order->shipping->city }}</td>

                                    <th>Province</th>
                                    <td>{{ $order->shipping->province }}</td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td>{{ $order->shipping->country }}</td>

                                    <th>Zipcode</th>
                                    <td>{{ $order->shipping->zipcode }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif


        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>Transaction</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Transaction mode</th>
                                    <td>{{ $order->transaction->mode }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $order->transaction->status }}</td>
                                </tr>
                                <tr>
                                    <th>Transaction Date</th>
                                    <td>{{ $order->transaction->created_at }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
