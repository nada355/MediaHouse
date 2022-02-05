<div class="header-center" class="wrap-search-form">
    <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
        <form action="{{ route('product.search') }}" method="get" >
            <div class="header-search-wrapper search-wrapper-wide">
                <label for="q" class="sr-only">Search</label>
                <input type="search" class="form-control" value="{{ $search }}" placeholder="Search product ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                <div class="wrap-list-cate" style="display: block;">
                    <input type="hidden" name="product_cat" id="product-cate" value="{{ $product_cat }}">
                    <input type="hidden" name="product_cat_id" id="product-cate-id" value="{{ $product_cat_id }}">
                    <a href="#" class="link-control">{{ str_split($product_cat,12)[0] }}</a>
                    <ul class="list-cate">
                        @foreach ($categories as $category)
                        <li class="level-0" data-id="{{ $category->id }}">{{ $category->name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div><!-- End .header-search-wrapper -->
        </form>
    </div><!-- End .header-search -->
</div>
