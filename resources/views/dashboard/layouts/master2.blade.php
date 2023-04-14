<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.layouts.head')
</head>
@include('dashboard.layouts.css')

<body class="main-body bg-primary-transparent">
    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->
	
    @yield('content')
    @include('dashboard.layouts.footer-scripts')
</body>

</html>
