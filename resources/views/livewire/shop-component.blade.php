
<style>
    .custom-sub{
        color:rgb(14, 14, 14);
        font-weight: 400;
        font-size: 15px;
    }
    .cat-link{
        color:rgb(14, 14, 14);
        font-weight: 300;
        font-size: 13px;
    }

</style>
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('assets/images/pub3.jpg')}}')">
        <div class="container">
            <h1 class="page-title">NOS PRODUITS<span>MEDIA HOUSE</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="#">Produits</a></li>
                <li class="breadcrumb-item active" aria-current="page">Galleries</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="toolbox">
                        <div class="toolbox-left">

                        </div><!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Trier par:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control" wire:model="sorting">
                                        <option value="default" selected="selected">Par defaut</option>
                                        <option value="newsless">trier par nouveauté</option>
                                        <option value="price">prix croissant</option>
                                        <option value="price-desc">prix decroissant</option>
                                    </select>
                                </div>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control" wire:model="pagesize">
                                        <option value="12" selected="selected">12 per page</option>
                                        <option value="16">16 per page</option>
                                        <option value="18">18 per page</option>
                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->
                            <div class="toolbox-layout">
                                <a href="#" class="btn-layout active">
                                    <svg width="16" height="10">
                                        <rect x="0" y="0" width="4" height="4" />
                                        <rect x="6" y="0" width="10" height="4" />
                                        <rect x="0" y="6" width="4" height="4" />
                                        <rect x="6" y="6" width="10" height="4" />
                                    </svg>
                                </a>

                            </div><!-- End .toolbox-layout -->
                        </div><!-- End .toolbox-right -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                       @php
                            $witems =  Cart::instance('wishlist')->content()->pluck('id');
                        @endphp
                        @foreach($products as $product)
                        <div class="product product-list">

                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <figure class="product-media">
                                        <div class="product-label label-new">
                                            @if ($witems->contains($product->id))
                                                <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})" class="btn-product-icon btn-wishlist" style="color:#F60F17 important!;" title="Add to wishlist"></a>
                                            @else
                                                <a href="/shop" wire:click.prevent="addToWishlist({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                            @endif
                                        </div>
                                        <a href="{{ route('product.details',['slug'=>$product->slug]) }}">
                                            <img src="{{asset('assets/images/demos/demo-4/products')}}/{{$product->image}}" alt="{{$product->name}}" class="product-image">
                                        </a>
                                    </figure><!-- End .product-media -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-6 col-lg-3 order-lg-last">
                                    <div class="product-list-action">
                                        <div class="product-price">
                                            {{ $product->regular_price }}
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

                                        <a href="#" class="btn-product btn-cart" wire:click.prevent="store({{ $product->id}},'{{ $product->name }}',{{ $product->regular_price }})"><span>AJOUTER AU PANIER</span></a>
                                    </div><!-- End .product-list-action -->
                                </div><!-- End .col-sm-6 col-lg-3 -->

                                <div class="col-lg-6">
                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $product->name}}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{ route('product.details',['slug'=>$product->slug]) }}">{{ $product->name }}</a></h3><!-- End .product-title -->

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

                    <nav aria-label="Page navigation">
                        {{ $products->links() }}
                    </nav>
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3 order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-clean">
                            <label>Filters:</label>
                            <a href="#" class="sidebar-filter-clear">Effacer Tout</a>
                        </div><!-- End .widget widget-clean -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                   Nos Categories
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-1">
                                <div class="widget-body">
                                    <div class="filter-items filter-items-count">
                                       @foreach ($categories as $category)
                                            <ul class="filter-item ">
                                                <li class="custom-control {{ count($category->subCategories) > 0 ? 'has-child-cate':''}}">

                                                     <a class="custom-sub" href="{{ route('product.category',['category_slug'=>$category->slug]) }}">{{ $category->name }}</a>
                                                    <a data-toggle="collapse" href="#souswidget-{{ $category->id }}" role="button" aria-expanded="true" aria-controls="souswidget-1"><i class="icon icon-plus" ></i></a>
                                                     @if(count($category->subcategories)>0)

                                                            @foreach ($category->subCategories as $scategory )
                                                                <ul class="sub-cate" id="souswidget-{{ $scategory->category_id }}">
                                                                <li class="category-item" >
                                                                    <a href="{{ route('product.category',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug]) }}" class="cat-link" >
                                                                        <i class="icon icon-caret"></i>
                                                                        {{ $scategory->name }}
                                                                    </a>
                                                                </li>
                                                                </ul>
                                                            @endforeach

                                                     @endif
                                                </li><!-- End .custom-checkbox -->
                                            </ul><!-- End .filter-item -->
                                       @endforeach

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->



                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
                                    Couleur
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-3">
                                <div class="widget-body">
                                    <div class="filter-colors">
                                        <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                        <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                    </div><!-- End .filter-colors -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                                    Marque
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-4">
                                <div class="widget-body">
                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-1">
                                                <label class="custom-control-label" for="brand-1">Appel</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-2">
                                                <label class="custom-control-label" for="brand-2">Nokia</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-3">
                                                <label class="custom-control-label" for="brand-3">Canon</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-4">
                                                <label class="custom-control-label" for="brand-4">Oppo</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-5">
                                                <label class="custom-control-label" for="brand-5">Huawei</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-6">
                                                <label class="custom-control-label" for="brand-6">Samsung</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="brand-7">
                                                <label class="custom-control-label" for="brand-7">Asus</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .widget -->

                        <div class="widget widget-collapsible">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                                    Prix
                                </a>
                            </h3><!-- End .widget-title -->

                            <div class="collapse show" id="widget-5">
                                <div class="widget-body">
                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Prix Range:
                                            <span id="filter-price-range">{{ $min_price }}DT - {{ $max_price }}DT</span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="slider"  wire:ignore>
                                        </div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget-body -->
                            </div><!-- End .collapse -->
                        </div>
                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@push('scripts')
    <script>
        var slider = document.getElementById('slider');
        noUiSlider.create(slider,{
            start : [1,1000],
            connect : true,
            range:{
                'min' : 1,
                'max' : 1000
            },
            pips:{
                mode:'steps',
                stepped:true,
                density:4
            }
        });

        slider.noUiSlider.on('update', function(value)
        {
            @this.set('min_price',value[0]);
            @this.set('max_price',value[1]);
		});
        </script>
@endpush
