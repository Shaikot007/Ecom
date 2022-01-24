<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.includes.meta')
    <title>ecom - @yield('title')</title>
    @include('front.includes.style')
</head>

<body>
    <div class="page-wrapper">
        @include('front.includes.header')
        @yield('body')
        @include('front.includes.footer')
    </div><!-- End .page-wrapper -->

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    @include('front.includes.mobile-view')
    @include('front.includes.sign-in-modal')
    @include('front.includes.script')
</body>

</html>
