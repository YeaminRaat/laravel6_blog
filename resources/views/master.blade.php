<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title> @yield('title') </title>

    @include('inc.styles')

</head>

<body>

@include('inc.header')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            @include('inc.widget')

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@include('inc.footer')

@include('inc.scripts')

</body>

</html>
