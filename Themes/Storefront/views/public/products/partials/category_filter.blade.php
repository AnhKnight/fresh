<aside class="widget widget_product_categories">
    <h3 class="widget-title">Danh Mục</h3>
    <ul class="product-categories">
        @if($categories->isNotEmpty())
            @foreach ($categories as $category)
                <li class="hassub">
                    <a href="{{ request()->fullUrlWithQuery(['category' => $category->slug, 'page' => 1]) }}" title="{{ $category->name }}">{{ $category->name }}</a>
                    @if ($category->items->isNotEmpty())
                        @include('public.products.partials.sub_category_filter', ['subCategories' => $category->items])
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
</aside>

