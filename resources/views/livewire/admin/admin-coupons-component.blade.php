<div>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>All Coupons</h4>
                        </div>
                        <div class="col-md-6 header-right">
                            <a href="{{ route('admin.addcoupon') }}" class="btn btn-success mb-2 header-right">Add New</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Coupon Code</th>
                                    <th>Coupon type</th>
                                    <th>Coupon value</th>
                                    <th>Cart value</th>
                                    <th>Expiry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($coupons as $coupon)
                                    <tr>
                                        <td>{{ $coupon->id }}</td>
                                        <td>{{ $coupon->code }}</td>
                                        <td>{{ $coupon->type }}</td>
                                        @if ($coupon->type == 'fixed')
                                            <td>{{ $coupon->value }}</td>
                                        @else
                                            <td>{{ $coupon->value }} %</td>
                                        @endif
                                        <td>{{ $coupon->cart_value }}</td>
                                        <td>{{ $coupon->expiry_date }}</td>

                                        <td>
                                            <a href="{{ route('admin.editcoupon',['coupon_id'=>$coupon->id]) }}"> <i class="icon-edit text-success"></i></a>
                                            <a href="#" onclick="confirm('Are you sure you want to delete this coupon?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{ $coupon->id }})" style="margin-left:10px;"> <i class="icon-times"></i></a>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

