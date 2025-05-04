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
        
        <!-- vendor css -->
        <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('lib/typicons.font/typicons.css') }}" rel="stylesheet"/>

        <!-- Page CSS plugins  -->
        <!-- azia CSS -->
        <link href="{{ asset('css/azia.css') }}" rel="stylesheet"/>
        <!-- Specific Page CSS goes HERE  -->
    </head>
    <body class="az-body">
        <div class="az-signin-wrapper">
            <div class="az-card-signin bg-gray-100">
                <div class="az-signin-header">
                    {{ $slot }}
                </div>
                <!-- <div class="az-signin-footer">
                    <p>Don't have an account? <a href="page-signup.html">Create an Account</a></p>
                </div> -->
            </div>
        </div>
    
        <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('lib/ionicons/ionicons.js') }}"></script>
        <!-- Specific Page JS goes HERE  -->
        <script src="{{ asset('js/azia.js') }}"></script>
        <script> $(function() { 'use strict' }) </script>
    </body>
</html>

