<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta -->
        <meta content="Responsive Bootstrap 4 Dashboard Template" name="description"/>
        <meta content="BootstrapDash" name="author"/>
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
        <link rel="canonical" href="https://appseed.us/admin-dashboards/django-dashboard-azia-pro">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo.webp') }}">  
        
        <!-- vendor css -->
        <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('lib/typicons.font/typicons.css') }}" rel="stylesheet"/>

        <!-- Page CSS plugins  -->
        <!-- azia CSS -->
        <link href="{{ asset('css/azia.css') }}" rel="stylesheet"/>
        <!-- Specific Page CSS goes HERE  -->
        @stack('links')
    </head>
    <body class="az-body {{ !empty($dash) ? 'az-dashboard-eight' : '' }}">
        <!-- Page Heading -->
        <x-header></x-header>
        
        <!-- Page Navbar -->
        <x-navbar></x-navbar>
        <div class="az-content {{ !empty($dash) ? 'az-content-dashboard-eight' : 'pd-y-20 pd-lg-y-30 pd-xl-y-40' }}">
            <div class="container {{ !empty($dash) ? 'd-block' : '' }}">
                <!-- Page Content -->
                {{ $slot }}
            </div>
        </div>

        <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('lib/ionicons/ionicons.js') }}"></script>
        <script src="{{ asset('js/azia.js') }}"></script>
        @stack('scripts')
    </body>
</html>
