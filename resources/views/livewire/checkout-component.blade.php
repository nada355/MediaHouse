<main class="main">
    <div class="page-header text-center" >
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">shop</a></li>
                <li class="breadcrumb-item"><a href="/cart">Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">

                <form wire:submit.prevent="placeOrder">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" wire:model="firstname" >
                                        @error('firstname')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" wire:model="lastname" >
                                        @error('lastname')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->


                                <div>
                                    <label>Country *</label>
                                    <input type="text" class="form-control" wire:model="country" >
                                    @error('country')
                                            <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>



                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Town / City *</label>
                                        <input type="text" class="form-control" wire:model="city" >
                                        @error('city')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Province *</label>
                                        <input type="text" class="form-control" wire:model="province" >
                                        @error('province')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Postcode / ZIP *</label>
                                        <input type="number" class="form-control" wire:model="zipcode" >
                                        @error('zipcode')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input type="tel" class="form-control" wire:model="mobile" >
                                        @error('mobile')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Line1</label>
                                        <input type="text" class="form-control" wire:model="line1" >
                                        @error('line1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Line2</label>
                                        <input type="text" class="form-control" wire:model="line2" >
                                        @error('line2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                                <div>
                                    <label>Email address *</label>
                                    <input type="email" class="form-control" wire:model="email" >
                                    @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>



                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" value="1" id="checkout-diff-address" wire:model="ship_to_different">
                                    <label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
                                </div><!-- End .custom-checkbox -->


                            @if ($ship_to_different)

                                <div>
                                    <h2 class="checkout-title">Shipping Details</h2><!-- End .checkout-title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name *</label>
                                                    <input type="text" class="form-control" wire:model="s_firstname" >
                                                    @error('s_firstname')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Last Name *</label>
                                                    <input type="text" class="form-control" wire:model="s_lastname" >
                                                    @error('s_lastname')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->


                                            <div>
                                                <label>Country *</label>
                                                <input type="text" class="form-control" wire:model="s_country" >
                                                @error('s_country')
                                                        <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>



                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Town / City *</label>
                                                    <input type="text" class="form-control" wire:model="s_city" >
                                                    @error('s_city')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Province *</label>
                                                    <input type="text" class="form-control" wire:model="s_province" >
                                                    @error('s_province')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Postcode / ZIP *</label>
                                                    <input type="number" class="form-control" wire:model="s_zipcode" >
                                                    @error('s_zipcode')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Phone *</label>
                                                    <input type="tel" class="form-control" wire:model="s_mobile" >
                                                    @error('s_mobile')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <label>Line1</label>
                                                    <input type="text" class="form-control" wire:model="s_line1" >
                                                    @error('s_line1')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <label>Line2</label>
                                                    <input type="text" class="form-control" wire:model="s_line2" >
                                                    @error('s_line2')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div><!-- End .col-sm-6 -->
                                            </div><!-- End .row -->
                                            <div>
                                                <label>Email address *</label>
                                                <input type="email" class="form-control" wire:model="s_email" >
                                                @error('s_email')
                                                            <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                </div><!-- End .col-lg-9 -->
                            @endif

                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">


                                    <tbody>
                                        @if (Session::has('checkout'))
                                        <tr class="summary-subtotal">
                                            <td>Total:</td>
                                            <td>{{ Session::get('checkout')['total'] }}</td>
                                        </tr><!-- End .summary-subtotal -->
                                        @endif

                                        <tr>
                                            <td>Shipping:</td>
                                            <td>Free shipping</td>
                                        </tr>


                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <div class="accordion-summary" id="accordion-payment">
                                    <div class="summary">
                                        <h3 class="summary-title">Payment Method</h3>
                                        @if ($paymentmode == 'card')
                                            @if (Session::has('stripe_error'))
                                                <div class="alert alert-danger">{{ Session::get('stripe_error') }}</div>
                                            @endif
                                            <div>
                                                <label for="card-no">Card Number:</label>
                                                <input type="text" class="form-control" wire:model="card_no" >
                                                @error('card_no')
                                                            <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="exp-month">Expiry Month:</label>
                                                <input type="text" class="form-control" placeholder="MM" wire:model="exp_month" >
                                                @error('exp_month')
                                                            <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="exp-year">Expiry Year:</label>
                                                <input type="text" class="form-control" placeholder="YYYY" wire:model="exp_year" >
                                                @error('exp_year')
                                                            <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="cvc">CVC:</label>
                                                <input type="password" class="form-control" wire:model="cvc" >
                                                @error('cvc')
                                                            <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        @endif

                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-1">
                                            <h2 class="card-title">
                                                <input type="radio" value="cod" class="collapsed" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1" wire:model="paymentmode">
                                                <label>
                                                    Direct bank transfer
                                                </label>

                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div>
                                 <div class="card">
                                        <div class="card-header" id="heading-2">
                                            <h2 class="card-title">
                                                <input type="radio" value="paypal" class="collapsed"  data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2" wire:model="paymentmode">
                                                <label>
                                                    PayPal
                                                </label>
                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
                                            <div class="card-body">
                                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading-5">
                                            <h2 class="card-title">
                                                <input type="radio" value="card" class="collapsed"  data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5" wire:model="paymentmode">
                                                <label>
                                                    Credit Card (Stripe)
                                                </label>
                                                    <img src="assets/images/payments-summary.png" alt="payments cards">

                                            </h2>
                                        </div><!-- End .card-header -->
                                        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
                                            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
                                            </div><!-- End .card-body -->
                                        </div><!-- End .collapse -->
                                    </div>
                                    @error('paymentmode')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <!-- End .card -->
                                </div><!-- End .accordion -->

                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>

                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->

                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main>
