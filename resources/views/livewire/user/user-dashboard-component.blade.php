<div class="content">
    <div class="page-header text-center" style="background-image: url('{{asset('assets/images/pub3.jpg')}}')">
        <div class="container">
            <h1 class="page-title">Dashboard<span>My Account</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <br><br>
    <style>
        .content {
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .icon-stat {
            display: block;
            overflow: hidden;
            position: relative;
            padding: 15px;
            margin-bottom: 1em;
            background-color: #fff;
            border-radius: 4px;
            border: 1px solid #ddd;
        }
        .icon-stat-label {
            display: block;
            color: #999;
            font-size: 13px;
        }
        .icon-stat-value {
            display: block;
            font-size: 28px;
            font-weight: 600;
        }
        .icon-stat-visual {
            position: relative;
            top: 22px;
            display: inline-block;
            width: 32px;
            height: 32px;
            border-radius: 4px;
            text-align: center;
            font-size: 16px;
            line-height: 30px;
        }
        .bg-primary {
            color: #fff;
            background: #d74b4b;
        }
        .bg-secondary {
            color: #fff;
            background: #6685a4;
        }

        .icon-stat-footer {
            padding: 10px 0 0;
            margin-top: 10px;
            color: #aaa;
            font-size: 12px;
            border-top: 1px solid #eee;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Cost</span>
                    <span class="icon-stat-value">{{ $totalCost }}DT</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="icon icon-dollar icon-stat-visual bg-primary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="icon icon-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Purchase</span>
                    <span class="icon-stat-value">{{ $totalPurchase }}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="icon icon-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="icon icon-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Delivered</span>
                    <span class="icon-stat-value">{{ $totalDeliverd }}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="icon icon-gift icon-stat-visual bg-primary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="icon icon-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="icon-stat">
                <div class="row">
                  <div class="col-xs-8 text-left">
                    <span class="icon-stat-label">Total Cancel</span>
                    <span class="icon-stat-value">{{$totalCanceled }}</span>
                  </div>
                  <div class="col-xs-4 text-center">
                    <i class="icon icon-gift icon-stat-visual bg-secondary"></i>
                  </div>
                </div>
                <div class="icon-stat-footer">
                  <i class="icon icon-clock-o"></i> Updated Now
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h4>latest Orders</h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <table class="table table-bordered text-center">
                            <thead class="thead-light" >
                                <tr>
                                    <th scope="col">OrderId</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Tax</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Zipcode</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col"  class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($orders as $order)
                              <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->subtotal }}</td>
                                <td>{{ $order->discount }}</td>
                                <td>{{ $order->tax }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->firstname }}</td>
                                <td>{{ $order->lastname }}</td>
                                <td>{{ $order->mobile }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->zipcode }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    <a href="{{ route('user.orderdetails',['order_id'=>$order->id]) }}" class="btn btn-info btn-sm">DETAILS</a>
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
