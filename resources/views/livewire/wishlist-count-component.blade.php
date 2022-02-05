<div class="wishlist">
@php
$citems =  Cart::instance('wishlist')->count();
@endphp
<a href="{{ route('product.wishlist') }}">
    @if($citems > 0)
            <span class="wishlist-count badge">{{ $citems }}</span>
    @endif
    <i class="icon-heart-o"></i>
</a>
</div>
