<!DOCTYPE html>
<html lang="en">
@include('frontend.layout.includes.docs.styles')
@stack('post_css')

<body
    class="{{ session()->has('lang_dir') && session()->get('lang_dir') == 'rtl' ? 'direction-rtl' : 'direction-ltr' }}">

<div class="content" style="margin: 2%;">
    <div class="container-fluid">
        <div class="container-fluid">

        @yield('content')

        </div>
    </div>
</div>
    @include('frontend.layout.includes.docs.scripts')
    @stack('post_script')

</body>
</html>
