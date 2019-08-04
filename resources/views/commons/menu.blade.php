<!--this is menu template-->
<section class="sidebar">
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class="header"></li>
        <li class="header"></li>

        <li class="treeview">
                <a href="{{route('index.index')}}">
                    <i class="fa fa-link"></i> <span>管理员模块</span>
                <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                </span>
            <ul class="treeview-menu">
                <li class="active"><a href="{{route('admin.index')}}"> <i class="fa fa-user"></i>管理员列表 </a>
                </li>
                <li class="active"><a href="#"> <i class="fa fa-user"></i>用户列表 </a></li>
                <li class="active"><a href="#"> <i class="fa fa-user"></i>用户列表 </a></li>
            </ul>
        </li>
    </ul>
    <!-- /.sidebar-menu -->
</section>