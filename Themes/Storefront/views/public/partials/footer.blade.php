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
{{--                <div id="text-13" class="widget widget_text  col-md-6" style="text-align: center">--}}
{{--                    <div class="title-footer">--}}
{{--                        <h3>FACEBOOK</h3></div>--}}
{{--                    <div class="textwidget">--}}
{{--                        <div id="fb-root"></div>--}}
{{--                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>--}}
{{--                        <div class="fb-page" data-href="https://www.facebook.com/Test-109398563819689" data-tabs="" data-width="273" data-height="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Test-109398563819689" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Test-109398563819689">Test</a></blockquote></div>--}}
{{--                    </div>--}}
{{--                    <div class="list-social clearfix">--}}
{{--                        <a href="#"><i class="fab fa-facebook-f"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-skype"></i></a>--}}
{{--                        <a href="#"><i class="fab fa-youtube"></i></a>--}}
{{--                    </div>--}}
{{--                    @if ($socialLinks->isNotEmpty())--}}
{{--                        <div class="footer-middle p-tb-30 clearfix">--}}
{{--                            <ul class="social-links list-inline">--}}
{{--                                <li>--}}
{{--                                @foreach ($socialLinks as $icon => $link)--}}
{{--                                    @if (! is_null($link))--}}
{{--                                        <a href="{{ $link }}"><i class="fa fa-{{ $icon }}" aria-hidden="true"></i></a>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div id="custom_html-3" class="widget_text widget widget_custom_html  col-md-6">--}}
{{--                    <div class="title-footer">--}}
{{--                        <h3>Bản đồ</h3></div>--}}
{{--                    <div class="textwidget custom-html-widget">--}}
{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6446311416425!2d105.80147811440702!3d21.006877593902136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca18dcb996b%3A0x6fc97fbbabf925f1!2zMTcgVDUsIEhvw6BuZyDEkOG6oW8gVGjDunksIFRydW5nIEhvw6AsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1571889913876!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0; height: 230px; width: 279px" allowfullscreen=""></iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
