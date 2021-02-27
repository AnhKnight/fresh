<div id="responsive-menu-container" class="slide-left">
    <div id="responsive-menu-wrapper">
        <ul id="responsive-menu" class="">
            <li id="responsive-menu-item-6813" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat responsive-menu-item">
                <a href="{{ route('home') }}" class="responsive-menu-item-link">Trang chủ</a>
            </li>
            <li id="responsive-menu-item-6814" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat responsive-menu-item">
                <a href="{{ route('home') }}/giới-thiệu" class="responsive-menu-item-link">GIỚI THIỆU</a>
            </li>
            @if ($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty())
                @foreach($categoryMenu->menus() as $menu)
                    @if (optional($menu->subMenus())->count() > 0)
                        <li id="responsive-menu-item-6492" class=" menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children responsive-menu-item responsive-menu-item-has-children">
                            <a href="{{ $menu->url() }}" class="responsive-menu-item-link">{{ $menu->name() }}
                                <div class="responsive-menu-subarrow">▼</div>
                            </a>
                            <ul class="responsive-menu-submenu responsive-menu-submenu-depth-1">
                                @foreach($menu->subMenus() as $category)
                                    <li id="responsive-menu-item-6493" class=" menu-item menu-item-type-taxonomy menu-item-object-product_cat responsive-menu-item">
                                        <a href="{{$category->url() }}" class="responsive-menu-item-link">{{$category->name() }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li id="responsive-menu-item-6814" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat responsive-menu-item">
                            <a href="{{ $menu->url() }}">{{ $menu->name() }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
            @if($categoryPosts->count() > 0)
                @foreach($categoryPosts as $categoryPost)
                    <li id="responsive-menu-item-6492" class=" menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children responsive-menu-item responsive-menu-item-has-children">
                        <a href="{{ $categoryPost->url() }}" class="responsive-menu-item-link">{{ $categoryPost->name }}
                            <div class="responsive-menu-subarrow">▼</div>
                        </a>
                        @if(optional($categoryPost->children)->count() > 0)
                            <ul class="responsive-menu-submenu responsive-menu-submenu-depth-1">
                                @foreach($categoryPost->children as $childrenPost)
                                    <li id="responsive-menu-item-6493" class=" menu-item menu-item-type-taxonomy menu-item-object-product_cat responsive-menu-item">
                                        <a href="{{ $childrenPost->url() }}" class="responsive-menu-item-link">{{ $childrenPost->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @endif
            <li id="responsive-menu-item-6814" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat responsive-menu-item">
                <a href="{{ route('home') }}/liên-hệ" class="responsive-menu-item-link">LIÊN HỆ</a>
            </li>
        </ul>
        <div id="responsive-menu-search-box">
            <form action="{{ route('products.index') }}" class="responsive-menu-search-form" role="search">
                <input type="search" name="query" placeholder="Tìm kiếm sản phẩm" class="responsive-menu-search-box">
                <select name="category" class="select search-box-select custom-select-black" style="display: none;">
                    <option value="" selected>{{ trans('storefront::layout.all_categories') }}</option>
                </select>
                <button type="submit" class="tim_for_mobile"><span class="glyphicon">Tìm kiếm</span></button>
            </form>
        </div>
        <div id="responsive-menu-additional-content"></div>
    </div>
</div>

