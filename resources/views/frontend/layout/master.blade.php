<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.includes.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

    <div id="preloader" style="display: none;">
        <div id="status">
            <img src="{{ asset(IMG_PRELOADER_PATH . $allsettings['preloader']) }}" alt="img" />
        </div>
    </div>

<div class="main">
    @include('frontend.layout.includes.header')

    @yield('content')

    @include('frontend.layout.includes.footer')
</div>

    @include('frontend.layout.includes.scripts')
    @stack('post_script')

</body>
</html>
