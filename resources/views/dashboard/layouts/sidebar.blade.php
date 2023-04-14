<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src={{ asset('assets/img/brand/logo.png') }} alt="User Mangment Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">User Mangment</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{ asset('assets/img/icons/face.png') }} class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can("show_users")
                        <li class="nav-item">
                            <a href={{ route('users.index') }} class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>All Users</p>
                            </a>
                        </li>
                        @endcan
                        @can("create_users")
                        <li class="nav-item">
                            <a href={{ route('users.create') }} class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        @endcan
                        @can("update_users")
                        <li class="nav-item">
                            <a href={{ route('users.index') }} class="nav-link">
                                <i class="fa fa-edit nav-icon"></i>
                                <p>update User</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fas fa-lock"></i>
                        <p>
                            Roles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can("show_roles")
                        <li class="nav-item">
                            <a href={{ route('roles.index') }} class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>All Roles</p>
                            </a>
                        </li>
                        @endcan
                        @can("create_roles")
                        <li class="nav-item">
                            <a href={{ route('roles.create') }} class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add Role</p>
                            </a>
                        </li>
                        @endcan
                        @can("update_roles")
                        <li class="nav-item">
                            <a href={{ route('roles.index') }} class="nav-link">
                                <i class="fa fa-edit nav-icon"></i>
                                <p>update Role</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Categories
                            <i class="right fas fa-angle-left"></i></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can("show_categories")
                        <li class="nav-item">
                            <a href="#"class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>All categories</p>
                            </a>
                        </li>
                        @endcan
                        @can("create_categories")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        @endcan
                        @can("update_categories")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-edit nav-icon"></i>
                                <p>update User</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-gift"></i>
                        <p>
                            products
                            <i class="right fas fa-angle-left"></i></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can("show_products")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>All products</p>
                            </a>
                        </li>
                        @endcan
                        @can("create_products")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        @endcan
                        @can("update_products")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-edit nav-icon"></i>
                                <p>update User</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-print"></i>
                        <p>
                            sliders
                            <i class="right fas fa-angle-left"></i></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @can("show_sliders")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-eye nav-icon"></i>
                                <p>All sliders</p>
                            </a>
                        </li>
                        @endcan
                        @can("create_sliders")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-plus nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        @endcan
                        @can("update_sliders")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-edit nav-icon"></i>
                                <p>update User</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
