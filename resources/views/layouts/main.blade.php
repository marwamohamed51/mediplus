<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    @include('includes.head')

</head>

<body>

    <!-- Preloader -->
    @include('includes.preloader')
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    @include('includes.proButton')

    <!-- Header Area -->
    <header class="header">
        <!-- Topbar -->
        @include('includes.topBar')
        <!-- End Topbar -->
        <!-- Header Inner -->
        @include('includes.headerInner')
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->

    <!-- home content -->
    @yield('content')
    <!-- End home content -->

    <!-- Footer Area -->
    @include('includes.footer')
    <!--/ End Footer Area -->

    <!-- js Area -->
    @include('includes.footerJS')
    <!--/ End js Area -->

</body>

</html>
