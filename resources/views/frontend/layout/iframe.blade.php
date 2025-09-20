<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.includes.iframe.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    @include('frontend.layout.includes.iframe.header')

    @yield('content')

</div>
    @include('frontend.layout.includes.iframe.scripts')
    @stack('post_script')

</body>
</html>
