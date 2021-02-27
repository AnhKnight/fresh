@if ($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty())
<div class="header-bottom clearfix">
    <div class="container">
        <div class="menu-main clearfix" style="display: flex; align-items: center;">
            <div class="menu-categories-container">
                <ul class="menu">
                    <li>
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}/giới-thiệu">Giới thiệu</a>
                    </li>
                    <li >
                        <a href="" >Sản Phẩm</a>
                        <ul id="menu-categories" class="menu">
                            @foreach($categoryMenu->menus() as $menu)
                                @if (optional($menu->subMenus())->count() > 0)
                                    <li id="menu-item-2630" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-2630" style="width: 100%">
                                        <a href="{{ $menu->url() }}" style="color: white">{{ $menu->name() }}</a>
                                        <ul class="sub-menu">
                                            @foreach($menu->subMenus() as $category)
                                                <li id="menu-item-2637" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2637" >
                                                    <a href="{{$category->url() }}" style="color: white;">{{ $category->name() }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li id="menu-item-6733" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6733">
                                        <a href="{{ $menu->url() }}" style="color: white;">{{ $menu->name() }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    @if($categoryPosts->count() > 0)
                        @foreach($categoryPosts as $categoryPost)
                            <li id="menu-item-2659" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-parent menu-item-2659">
                                <a href="{{ $categoryPost->url() }}">{{ $categoryPost->name }}</a>
                                @if(optional($categoryPost->children)->count() > 0)
                                    <ul class="sub-menu">
                                        @foreach($categoryPost->children as $childrenPost)
                                            <li id="menu-item-3574" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3574">
                                                <a href="{{ $childrenPost->url() }}" style="color: white;">{{ $childrenPost->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    @endif
                    <li class="menu-item-has-parent">
                        <a href="" >Dự Án</a>
                        <ul>
                            @if($categoryProjects->count() > 0)
                                @foreach($categoryProjects as $categoryProject)
                                    <li id="menu-item-2659" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-2659">
                                        <a href="{{ $categoryProject->url() }}" style="color: white">{{ $categoryProject->name }}</a>
                                        @if(optional($categoryProject->children)->count() > 0)
                                            <ul class="sub-menu">
                                                @foreach($categoryProject->children as $childrenProject)
                                                    <li id="menu-item-3574" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3574 menu-parent">
                                                        <a href="{{ $childrenProject->url() }}" style="color: #333;padding: 10px 15px; font-size: 15px;">{{ $childrenProject->name }}</a>
                                                        @if(optional($childrenProject->children)->count() > 0)
                                                            <ul class="sub-menu right">
                                                                @foreach($childrenProject->children as $grandchildrenProject)
                                                                    <li id="menu-item-3576" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3574">
                                                                        <a href="{{ $grandchildrenProject->url() }}" style="color: white;">{{ $grandchildrenProject->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('home') }}/liên-hệ">Liên Hệ</a>
                    </li>
                </ul>


            </div>
        </div>
    </div>
</div>
@endif
