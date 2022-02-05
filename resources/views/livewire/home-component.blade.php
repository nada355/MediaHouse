
<main class="main">
    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
            data-owl-options='{
                "dots": true,
                "nav": false,
                "responsive": {
                    "1200": {
                        "nav": true,
                        "dots": false
                    }
                }
            }'>

            <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-1.jpg);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h1 class="intro-title text-white">MEDIA</h1>
                            <h3 class="intro-subtitle text-third">L'agence qui developpe vous idées</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">HOUSE</h1><!-- End .intro-title -->


                            <a href="category-list.html" class="btn btn-primary btn-round" style="background: none;">
                                <span>Achetez</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-lg-11 offset-lg-1 -->
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div>

        @foreach ($sliders as $slide)

            <div class="intro-slide" style="background-image: url({{ asset('assets/images/demos/demo-4/slider')}}/{{ $slide->image }});">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-primary">{{ $slide->subtitle }}</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-dark">{{ $slide->title  }}</h1><!-- End .intro-title -->

                            <div class="intro-price">
                                <sup>Aujourd'hui:</sup>
                                <span class="text-primary">
                                   {{ $slide->price }} DT
                                </span>
                            </div><!-- End .intro-price -->

                            <a href="{{ $slide->link }}" class="btn btn-primary btn-round">
                                <span>Achetez</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-md-6 offset-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->

        @endforeach


        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->


    <div class="page-content pb-3" id="about">
        <div class="container">
            <hr class="mb-0">

            <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="about-text text-center mt-3">
                        <h2 class="title text-center mb-2">BIENVENUE DANS NOTRE MAGASIN</h2><!-- End .title text-center mb-2 -->
                            <p>
    Media House hammamet informatique est la première boutique à vendre
    du matériel informatique en Tunisie. propose à ses clients toutes sortes d'articles pour usage informatique :
     Pc portables, Pc de bureau, tablettes, Smartphones ainsi que toutes sortes d'accessoires comme les claviers,
     les souris, les casques, les câbles...
</p>
                    </div><!-- End .about-text -->
                </div><!-- End .col-lg-10 offset-1 -->
            </div><!-- End .row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 mt-2">
                    <div class="icon-box icon-box-sm text-center">
                        <span class="icon-box-icon">
                            <i class="icon-puzzle-piece"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Design</h3><!-- End .icon-box-title -->
                            <p>Media House vous offre les meilleurs design graphique avec devellopement Web.</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6 mt-2">
                    <div class="icon-box icon-box-sm text-center">
                        <span class="icon-box-icon">
                            <i class="icon-life-ring"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Installation</h3><!-- End .icon-box-title -->
                            <p>Installation des pieces informatique : smartphone,accessoires,audio & video. </p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->

                <div class="col-lg-4 col-sm-6 mt-2">
                    <div class="icon-box icon-box-sm text-center">
                        <span class="icon-box-icon">
                            <i class="icon-heart-o"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Vente</h3><!-- End .icon-box-title -->
                            <p>Ventes des pieces informatique : smartphone,accessoires,audio & video,computer. </p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-lg-4 col-sm-6 -->
            </div><!-- End .row -->
        </div>
        <hr class="mb-0">
    </div><!-- End .container -->

        <div class="mb-2"></div><!-- End .mb-2 -->


    </div><!-- End .page-content -->

    <div class="container" id="categorie">
        <h2 class="title text-center mb-4"><span style="color:#F60F17;">MEILLEURS</span> CATEGORIES<span style="color:#F60F17;">.</span></h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <table>
                <thead>
                   <th width="500">
                       <a class="cat-block">
                            <figure>
                                <span>
                                    <img src="{{ asset('assets/images/demos/demo-4/cats/6.png')}}" alt="Category image">
                                </span>
                            </figure>
                        </a>
                    </th>

                    <th width="500">
                        <a class="cat-block">
                             <figure>
                                 <span>
                                     <img src="{{ asset('assets/images/demos/demo-4/cats/5.png')}}" alt="Category image">
                                 </span>
                             </figure>
                         </a>
                     </th>

                     <th width="500">
                        <a class="cat-block">
                             <figure>
                                 <span>
                                     <img src="{{ asset('assets/images/demos/demo-4/cats/1.png')}}" alt="Category image">
                                 </span>
                             </figure>
                         </a>
                     </th>

                     <th width="500">
                        <a class="cat-block">
                             <figure>
                                 <span>
                                     <img src="{{ asset('assets/images/demos/demo-4/cats/2.png')}}" alt="Category image">
                                 </span>
                             </figure>
                         </a>
                     </th>

                     <th width="500">
                        <a class="cat-block">
                             <figure>
                                 <span>
                                     <img src="{{ asset('assets/images/demos/demo-4/cats/3.png')}}" alt="Category image">
                                 </span>
                             </figure>
                         </a>
                     </th>
                     <th width="500">
                        <a class="cat-block">
                             <figure>
                                 <span>
                                     <img src="{{ asset('assets/images/demos/demo-4/cats/5.png')}}" alt="Category image">
                                 </span>
                             </figure>
                         </a>
                     </th>



                </thead><!-- End .row -->
                <tbody>
                    @foreach ($mcategories as $mcategorie)
                    <td width="500"> <a href="{{ route('product.category',['category_slug'=>$mcategorie->slug]) }}"><h3 class="cat-block-title" style="text-align:center;">{{ $mcategorie->name }}</h3></a></td>
                    @endforeach

                </tbody>
            </table><!-- End .col-sm-4 col-lg-2 -->


        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->
    <div class="container">
        <div class="cta cta-border mb-5" style="background-image: url({{ asset('assets/images/demos/demo-4/bg-1.jpg')}});">
            <img src="{{ asset('assets/images/demos/demo-4/camera.png')}}" alt="camera" class="cta-img">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text text-right text-white">
                            <p>Achetez les offres du jour <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                        </div><!-- End .cta-text -->
                        <a href="#" class="btn btn-primary btn-round"><span>Achetez - 429.99 TN</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .cta-content -->
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .cta -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-5 -->


 <!---------------- Latest Products -------------------------->
    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title"><span style="color:#F60F17;">Derniers</span> Produits<span style="color:#F60F17;">.</span></h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <a href="/shop" class="title-link">Voir Tout <i class="icon-long-arrow-right"></i></a>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->


        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                        "nav": true,
                        "dots": true,
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
                            },
                            "1200": {
                                "items":5
                            }
                        }
                    }'>
                    @php
                         $witems =  Cart::instance('wishlist')->content()->pluck('id');
                    @endphp
                    @foreach ($lproducts as $lproduct)

                    <div class="product product-2">
                        <figure class="product-media">

                            <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}">
                                <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $lproduct->image }}" alt="Product image" class="product-image">
                            </a>

                            <div class="product-label label-new">
                                @if ($witems->contains($lproduct->id))
                                    <a href="" class="btn-product-icon btn-wishlist" style="color:#F60F17 important!;" title="Add to wishlist"></a>
                                @else
                                    <a href="" wire:click.prevent="addToWishlist({{ $lproduct->id}},'{{ $lproduct->name }}',{{ $lproduct->regular_price }})" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                @endif
                            </div>
                            <div class="product-action">
                                <a wire:click.prevent="store({{ $lproduct->id}},'{{ $lproduct->name }}',{{ $lproduct->regular_price }})" class="btn-product btn-cart" title="Ajouter au panier"><span>Ajouter au panier</span></a>
                                <a href="" class="btn-product btn-quickview" title="aperçu rapide"><span>aperçu rapide</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">

                            <h3 class="product-title">
                                <a href="{{ route('product.details',['slug'=>$lproduct->slug]) }}">{{ $lproduct->name }}
                                </a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                {{ $lproduct->regular_price }}
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    @endforeach


                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->

        </div><!-- End .tab-content -->
    </div><!-- End .container -->
     <!---------------- End Latest Products -------------------------->




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
                            <img src="{{ asset('assets/images/demos/demo-4/banners/banner-4.jpg')}}" style="max-height: 320px;" alt="banner">
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


    <div class="mb-5"></div><!-- End .mb-5 -->
        @if ($sproducts->count() > 0)
        <div class="container for-you">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Recommandation Pour Vous<span style="color:#F60F17;">.</span></h2><!-- End .title -->
                </div><!-- End .heading-left -->

               <div class="heading-right">
                    <a href="/shop" class="title-link">Voir Tout <i class="icon-long-arrow-right"></i></a>
               </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="products">
                <div class="row justify-content-center">

                    @foreach ($sproducts as $sproduct)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-sale">Sale</span>
                                <a href="{{ route('product.details',['slug'=>$sproduct->slug]) }}">
                                    <img src="{{ asset('assets/images/demos/demo-4/products')}}/{{ $sproduct->image }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="{{ route('product.details',['slug'=>$sproduct->slug]) }}" class="btn-product btn-cart" title="Ajouter au panier"><span>Ajouter au panier</span></a>
                                    <a href="#" class="btn-product btn-quickview" title="aperçu rapide"><span>aperçu rapide</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">

                                <h3 class="product-title"><a href="/shop">{{ $sproduct->name }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">{{ $sproduct->regular_price }}</span>
                                    <span class="old-price" style="text-decoration: line-through;">{{ $sproduct->sale_price }}</span>


                                </div><!-- End .product-price -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    @endforeach


                </div><!-- End .row -->
            </div><!-- End .products -->
        </div><!-- End .container -->
        @endif



    <hr class="mb-0">
    <div class="bg-light pt-5 pb-6" style="height:170px;">

    <div class="container">

        <div class="owl-carousel mt-2 mb-5 owl-simple" data-toggle="owl"
            data-owl-options='{
                "nav": false,
                "dots": false,
                "margin": 30,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "420": {
                        "items":3
                    },
                    "600": {
                        "items":4
                    },
                    "900": {
                        "items":5
                    },
                    "1024": {
                        "items":6
                    }
                }
            }'>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>

            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>

            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>

            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>

            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>


                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>
                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>
                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>
                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>
                </div><!-- End .rating-container -->
            </a>
            <a href="#" class="brand">
                <div class="ratings-container">
                    <div class="ratings">
                        <div class="ratings-val" style="width: 60%;"></div>
                        <p  style="color:#F60F17;">-Anime R</p><!-- End .ratings-val -->
                    </div><!-- End .ratings -->
                    <span class="ratings-text">(Il ya 3 ans )</span>
                </div><!-- End .rating-container -->
            </a>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container Brands -->

</div>
<hr class="mb-0">
</main><!-- End .main -->

