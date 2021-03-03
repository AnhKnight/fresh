@if ($categoryMenu->menus()->isNotEmpty() || $primaryMenu->menus()->isNotEmpty())
    <div class="header-top">
        <div class="container container-ver2">
            <div class="box">
                <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                <div class="logo-mobile"><a href="{{ route('home') }}" title="Xanadu"><img src="assets/images/logo-v1.png" alt="Xanadu-Logo"></a></div>
                <nav class="mega-menu">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <ul class="nav navbar-nav" id="navbar">
                        <li class="level1 active"><a href="{{ route('home') }}" title="Home">Trang chủ</a>
                        </li>
                        <li class="level1"><a href="{{ route('home') }}/giới-thiệu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="level1 dropdown">
                            <a href="javascript:void(0)" title="men">Sản Phẩm</a>
                            <div class="sub-menu sub-menu-v2 dropdown-menu">
                                <div class="top-sub-menu">
                                    <img src="{{ asset('assets/images/top-submenu1.jpg') }}" alt="images">
                                </div>
                                <ul class="menu-level-1">
                                    @foreach($categoryMenu->menus() as $menu)
                                        @if (optional($menu->subMenus())->count() > 0)
                                            <li class="level2">
                                                <a href="{{ $menu->url() }}">{{ $menu->name() }}</a>
                                                <ul class="menu-level-2">
                                                    @foreach($menu->subMenus() as $category)
                                                        <li class="level3" >
                                                            <a href="{{$category->url() }}">{{ $category->name() }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="level2">
                                                <a href="{{ $menu->url() }}">{{ $menu->name() }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <!-- End RightSubMenu -->
                            </div>
                            <!-- End Dropdown Menu -->
                        </li>
                        @if($categoryPosts->count() > 0)
                        <li class="level1 dropdown">
                            <a href="javascript:void(0)" title="men">Bài viết</a>
                            <div class="sub-menu sub-menu-v2 dropdown-menu">
                                <ul class="menu-level-1">
                                    @foreach($categoryPosts as $categoryPost)
                                        @if (optional($categoryPost)->count() > 0)
                                            <li class="level2">
                                                <a href="{{ $categoryPost->url() }}">{{ $categoryPost->name }}</a>
                                                @if(optional($categoryPost->children)->count() > 0)
                                                <ul class="menu-level-2">
                                                    @foreach($categoryPost->children as $childrenPost)
                                                        <li class="level3" >
                                                            <a href="{{$childrenPost->url() }}">{{ $childrenPost->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                <!-- End RightSubMenu -->
                            </div>
                            <!-- End Dropdown Menu -->
                        </li>
                        @endif
                        <li class="level1"><a href="{{ route('home') }}/liên-hệ" title="Liên Hệ">Liên Hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End container -->
    </div>
@endif
