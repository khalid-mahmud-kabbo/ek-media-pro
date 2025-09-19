<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.include.iframe.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    @include('frontend.layout.include.iframe.header')

    @yield('content')

</div>
    @include('frontend.layout.include.iframe.scripts')
    @stack('post_script')

</body>
</html>
