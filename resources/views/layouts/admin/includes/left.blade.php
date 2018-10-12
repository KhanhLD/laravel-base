<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview #">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>{!! __('admin/users.title') !!}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="#">
                        <a #">
                            <i class="fa fa-list"></i> {!! __('admin/users.label.list') !!}
                        </a>
                    </li>
                    <li class="#">
                        <a href="#">
                            <i class="fa fa-plus"></i> {!! __('admin/users.label.create') !!}
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview #">
                <a href="javascript:;">
                    <i class="fa fa-child"></i>
                    <span>{!! __('admin/roles.title') !!}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="#">
                        <a href="#">
                            <i class="fa fa-list"></i> {!! __('admin/roles.label.list') !!}
                        </a>
                    </li>
                    <li class="#">
                        <a href="#">
                            <i class="fa fa-plus"></i> {!! __('admin/roles.label.add') !!}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
