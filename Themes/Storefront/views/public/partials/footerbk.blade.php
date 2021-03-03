<footer class="footer clearfix">
    <div class="top-footer clearfix">
        <div class="container clearfix">
            <div class="f-widget row clearfix">
                <div id="text-12" class="widget widget_text offset-md-3 col-md-6">
                    <div class="textwidget text-center">
                        <div class="title-footer">
                            <h3>Liên hệ</h3></div>
{{--                        <a href="{{ route('home') }}" class="footer-logo">--}}
{{--                            @if (is_null($footerLogo))--}}
{{--                                <h2>{{ setting('store_name') }}</h2>--}}
{{--                            @else--}}
{{--                                <img src="{{ $footerLogo }}" class="img-responsive" alt="footer-logo" style="height: 160px">--}}
{{--                            @endif--}}
{{--                        </a>--}}
{{--                        <p><img class="alignnone size-full wp-image-7500" src="{{` asset('frontend/img/logo.png') }}" alt="" width="250px" height="111"></p>--}}
{{--                        <p><strong>Địa chỉ:</strong>&nbsp;53 Tôn Đức Thắng – Đống Đa TP. Hà Nội</p>--}}
{{--                        <p><strong>Phone:</strong>&nbsp;{{ trans('storefront::layout.phone') }}</p>--}}
{{--                        <p><strong>Email:</strong>&nbsp;modernviet@gmail.co m</p>--}}
                        @if (setting('store_phone') || setting('store_email') || setting('storefront_footer_address'))
                            <div class="contact">
                                <ul class="list-inline">
                                    @if (setting('store_phone'))
                                        <li>
                                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                                            <span class="contact-info">{{ setting('store_phone') }}</span>
                                        </li>
                                    @endif

                                    @if (setting('store_email'))
                                        <li>
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                            <span class="contact-info">{{ setting('store_email') }}</span>
                                        </li>
                                    @endif

                                    @if (setting('storefront_footer_address'))
                                        <li>
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            <span class="contact-info">{{ setting('storefront_footer_address') }}</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom p-tb-20 clearfix">
        <div class="container">
            <div class="copyright text-center">
                {!! $copyrightText !!}
            </div>
        </div>
    </div>
</footer>
