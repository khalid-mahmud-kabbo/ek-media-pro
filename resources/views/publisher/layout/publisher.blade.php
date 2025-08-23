<!DOCTYPE html>
<html lang="en">
@include('backend.layouts.include.backend.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    {{-- @include('frontend.layouts.include.header') --}}

    @yield('content')

    {{-- @include('frontend.layouts.include.footer') --}}
</div>
    @include('backend.layouts.include.backend.scripts')
    @stack('post_script')

</body>
</html>
