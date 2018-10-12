<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ $title or trans('admin/global.title') }}</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @include('layouts.admin.includes.styles')
        @include('layouts.admin.includes.scripts')
    </head>
    <body class="hold-transition login-page">
        @yield('content')
    </body>
</html>
