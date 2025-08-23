<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.include.frontend.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    @include('frontend.layouts.include.frontend.header')

    @yield('content')

    @include('frontend.layouts.include.frontend.footer')
</div>
    @include('frontend.layouts.include.frontend.scripts')
    @stack('post_script')

</body>
</html>
