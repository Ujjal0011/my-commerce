<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('includes.head')
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <header class="header navbar-area">
        @include('includes.header')
    </header>


    @yield('content')

    <footer class="footer">
        @include('includes.footer')
    </footer>


    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    @include('includes.scripts')

</body>

</html>
