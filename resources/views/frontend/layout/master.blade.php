<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.include.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    @include('frontend.layout.include.header')

    @yield('content')

    @include('frontend.layout.include.footer')
</div>
    @include('frontend.layout.include.scripts')
    @stack('post_script')

</body>
</html>
