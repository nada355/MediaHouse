<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display:block !important;
        }

        td{
            width:100px;
        }
    </style>
    <div class="container" style="padding:10px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="row">
                        <div class="col-md-6">
                           <h6> / All Products</h6>
                        </div>
                        <div class="col-md-6 header-right">
                            <a href="{{ route('admin.addproduct') }}" class="btn btn-success mb-2 header-right">Add New</a>
                            <a href="/shop" class="btn btn-info ml-2 mb-2 ">View shop</a>

                        </div>
                    </div>
                    <div class="panel-body">

                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Sale Price</th>
                                    <th>Category</th>

                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td ><img src="{{asset('assets/images/demos/demo-4/products')}}/{{$product->image}}"  alt="{{$product->name}}" class="product-image"></td>
                                        <td>{{ $product->name}}</td>
                                        <td>{{ $product->stack_status}}</td>
                                        <td>{{ $product->regular_price}}</td>
                                        <td>{{ $product->sale_price}}</td>
                                        <td>{{ $product->category->name}}</td>

                                        <td>{{ $product->created_at}}</td>
                                        <td>
                                            <a href="{{ route('admin.editproduct',['product_slug'=>$product->slug]) }}"> <i class="icon-edit text-success"></i></a>
                                            <a href="#" onclick="confirm('Are you sure you want to delete this product?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{ $product->id }})" style="margin-left:10px;"> <i class="icon-times"></i></a>

                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
