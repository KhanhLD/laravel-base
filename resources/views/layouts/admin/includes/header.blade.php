<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>{{ __('admin/home.header.app_name') }}</b></span>
        <span class="logo-lg"><b>{{ __('admin/home.header.app_name') }}</b> {{ __('admin/home.header.app_admin') }}</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">{{ trans('admin/global.toggle_navigation') }}</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{ auth()->user()->email ?? '' }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">{{ trans('admin/login.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('admin/logout') }}" class="btn btn-default btn-flat">{{ trans('admin/login.sign_out') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
