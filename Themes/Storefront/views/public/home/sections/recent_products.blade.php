@if ($recentProducts->isNotEmpty())
    <div class="section-header">
        <h3 style="text-align: center;">{{ setting('storefront_recent_products_section_title') }}</h3>
    </div>
    @each('public.products.partials.product_card', $recentProducts, 'product')
@endif
