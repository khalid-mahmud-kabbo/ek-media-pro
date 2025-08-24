<!DOCTYPE html>
<html lang="en">
@include('publisher.layout.include.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="main">
    {{-- @include('publisher.layout.include.header') --}}

    @yield('content')

    {{-- @include('publisher.layout.include.footer') --}}
</div>
    @include('publisher.layout.include.scripts')
    @stack('post_script')

</body>
</html>
