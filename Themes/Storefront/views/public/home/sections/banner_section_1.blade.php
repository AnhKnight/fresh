<div class="banner-home2 center">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionOneBanners[1],
                'class' => 'banner-md',
            ])
        </div>
        <div class="col-md-4 col-sm-4">
            @include('public.home.sections.partials.single_banner', [
              'banner' => $bannerSectionOneBanners[2],
              'class' => 'banner-md',
            ])
        </div>
        <div class="col-md-4 col-sm-4">
            @include('public.home.sections.partials.single_banner', [
                'banner' => $bannerSectionOneBanners[3],
                'class' => 'banner-vr',
            ])
        </div>
    </div>
</div>
