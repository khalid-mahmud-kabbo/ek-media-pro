<!DOCTYPE html>
<html lang="en">
@include('backend.layout.include.backend.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    {{-- @include('frontend.layouts.include.header') --}}

    @yield('content')

    {{-- @include('frontend.layouts.include.footer') --}}
</div>
    @include('backend.layout.include.backend.scripts')
    @stack('post_script')

</body>
</html>
