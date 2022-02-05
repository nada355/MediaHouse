<div class="wishlist">

<a href="{{ route('product.cart') }}">
    @if(Cart::instance('cart')->count() > 0)
            <span class="wishlist-count badge">{{ Cart::instance('cart')->count()}}</span>
    @endif
    <i class="icon-shopping-cart"></i>

</a>
</div>
