<!DOCTYPE html>
<html lang="en">
<head>

    @include("admin.inc.style")
    @stack('styles')
    <title> @yield('title') </title>

</head>

<body>

<section id="container">
@include("admin.inc.header")

@include("admin.inc.sidebar")
<!--main content start-->
    <section id="main-content">
        <section class="wrapper">

        @yield('content')

        </section>
    </section>
    <!--main content end-->

    @include("admin.inc.footer")
</section>

@include("admin.inc.scripts")
@stack('scripts')

</body>
</html>
