@include('includes.head')

<body>
    <!-- ======= Header ======= -->
    @include('includes.header')

    <!-- ======= Sidebar ======= -->
    @include('includes.sidebar')


    <main id="main" class="main">

        @yield('content')

    </main>

    <!-- ======= Footer ======= -->
    @include('includes.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('includes.script')

</body>

</html>
