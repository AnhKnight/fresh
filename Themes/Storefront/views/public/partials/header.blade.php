<header>
    <div class="header-mid clearfix">
        <div class="container">
            <div class="logo">
                <a href="{{ route('home') }}" title="RÈM NHẬP KHẨU CHÍNH HÃNG TẠI HÀ NỘI">
                    @if (is_null($headerLogo))
                        <h2>{{ setting('store_name') }}</h2>
                    @else
                    <img src="{{ $headerLogo }}" alt="RÈM NHẬP KHẨU CHÍNH HÃNG TẠI HÀ NỘI" style="height: 110px">
                    @endif
                </a>
            </div>
            <div class="hotline clearfix">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="phone">Hotline <span>{{ setting('store_phone') }}</span></div>
            </div>
            <div class="search-form clearfix">
                <form role="search" action="{{ route('products.index') }}" method="get" class="searchform clearfix">
                    <input type="search" name="query" class="nhaptukhoa form-control" placeholder="{{ trans('storefront::layout.search_for_products') }}" value="{{ request('query') }}">
                    <select name="category" class="select search-box-select custom-select-black" style="display: none;">
                        <option value="" selected>{{ trans('storefront::layout.all_categories') }}</option>
                    </select>
                    <button type="submit" class="tim_but"><span class="glyphicon"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                </form>
            </div>
        </div>
    </div>
    @include('public.partials.navbar')
</header>
