<div class="col-xs-6 col-md-6 col-sm-6 col-lg-3">
    <div class="products ver2">
        <div class="item-inner">
            <div class="product">
                <div class="product-images">
                    <a href="{{ route('products.show', $product->slug) }}" title="product-images">
                        <img class="primary_image" src="{{ optional($product->base_image)->path }}" alt="">
                        <img class="secondary_image" src="{{ optional($product->base_image)->path }}" alt="">
                    </a>
                </div>
                <a href="{{ route('products.show', $product->slug) }}" title="{{ $product->name }}"><p class="product-title">{{ $product->name }}</p></a>
                <p class="product-price">{{ product_price($product) }}</p>
            </div>
        </div>
    </div>
</div>
