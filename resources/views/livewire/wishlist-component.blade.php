
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('assets/images/pub3.jpg')}}')">
        <div class="container">
            <h1 class="page-title">WISHLIST PRODUITS<span>MEDIA HOUSE</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Galleries</a></li>
                <li class="breadcrumb-item"><a href="#">Produits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    @if(Cart::instance('wishlist')->content()->count() > 0)
    <div class="products mb-3">
         @foreach(Cart::instance('wishlist')->content() as $item)
         <div class="product product-list">

             <div class="row">
                 <div class="col-6 col-lg-3">
                     <figure class="product-media">
                         <div class="product-label label-new">
                            <a href="#" wire:click.prevent="removeFromWishlist({{$item->model->id}})" class="btn-product-icon btn-wishlist" style="color:#F60F17 important!;" title="Add to wishlist"></a>
                         </div>
                         <a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">
                             <img src="{{asset('assets/images/demos/demo-4/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}" class="product-image">
                         </a>
                     </figure><!-- End .product-media -->
                 </div><!-- End .col-sm-6 col-lg-3 -->

                 <div class="col-6 col-lg-3 order-lg-last">
                     <div class="product-list-action">
                         <div class="product-price">
                             {{ $item->model->regular_price }}
                         </div><!-- End .product-price -->
                         <div class="ratings-container">
                             <div class="ratings">
                                 <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                             </div><!-- End .ratings -->
                             <span class="ratings-text">( 2 Reviews )</span>
                         </div><!-- End .rating-container -->

                         <div class="product-action">
                             <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                             <a href="#" class="btn-product btn-compare" title=""><span>compare</span></a>
                         </div><!-- End .product-action -->

                         <a href="#" class="btn-product btn-cart" wire:click.prevent="moveProductFromWishlistToCart('{{ $item->rowId}}')"><span>REMPLACER AU PANIER</span></a>
                     </div><!-- End .product-list-action -->
                 </div><!-- End .col-sm-6 col-lg-3 -->

                 <div class="col-lg-6">
                     <div class="product-body">
                         <div class="product-cat">
                             <a href="#">{{ $item->model->name}}</a>
                         </div><!-- End .product-cat -->
                         <h3 class="product-title"><a href="{{ route('product.details',['slug'=>$item->model->slug]) }}">{{ $item->model->name }}</a></h3><!-- End .product-title -->

                         <div class="ratings-container">
                             <div class="ratings">
                                 <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                             </div><!-- End .ratings -->
                             <span class="ratings-text">( 12 Reviews )</span>
                         </div><!-- End .rating-container -->
                     </div><!-- End .product-body -->
                 </div><!-- End .col-lg-6 -->
             </div><!-- End .row -->
         </div><!-- End .product -->
       @endforeach
     </div><!-- End .products -->
    @else
        <h4 style="color:rgb(238, 27, 27);">No item in wishlist</h4>
    @endif
</main>
