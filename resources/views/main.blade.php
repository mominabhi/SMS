
<!doctype html>
<html lang="en">
<head>
    @include('partials._head')

</head>
<body>
<div class="prtm-wrapper">

    @include('partials._nav')

    <div class="prtm-main">

        @include('partials._sideNav')

        <div class="prtm-content-wrapper">

            @yield('main_content')

            @include('partials._footer')
        </div>
    </div>
</div>

@include('partials._script')
</body>
</html>
