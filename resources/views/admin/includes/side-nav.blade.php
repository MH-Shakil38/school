<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset(setting()->logo)}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    {{--                <li class="nav-item menu-open active">--}}
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link" target="_blank">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Website</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    {{--                <li class="nav-item menu-open active">--}}
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Menage User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admins.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin Create</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('roles.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Role Create</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Notice
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('website.post',21,['id'=>'12'])}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>New Notice</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Website
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('messages.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>আমাদের কথা</p>
                            </a>
                        </li>

                        {{--                        <li class="nav-item">--}}
                        {{--                            <a href="{{route('marquees.index')}}" class="nav-link">--}}
                        {{--                                <i class="far fa-circle nav-icon"></i>--}}
                        {{--                                <p>সর্বশেষ নোটিশ</p>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        @forelse(menus() as $info)
                            <li class="nav-item">
                                <a href="{{route('website.post',$info->id)}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{$info->bn_name}}</p>
                                </a>
                            </li>
                        @empty
                        @endforelse

                    </ul>
                </li>
                {{--                <li class="nav-item">--}}
                {{--                    <a href="pages/widgets.html" class="nav-link">--}}
                {{--                        <i class="nav-icon fas fa-th"></i>--}}
                {{--                        <p>--}}
                {{--                            Widgets--}}
                {{--                            <span class="right badge badge-danger">New</span>--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Configuration's
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('settings.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Setting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('banners.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banner</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('slider.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('religions.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Religion</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('designations.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher Designation</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('blood-groups.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blood Group</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('subjects.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Subject</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('management-categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Management designation</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Photo Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('photo-categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('photo-galleries.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Photo gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Video Gallery
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('video-categories.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('video-galleries.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Video gallery</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Employee
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('teachers.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teachers</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('managements.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Management</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('video-galleries.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-item ml-4" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                     <i class="fa fa-sign-out"></i>   {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    </div>
                </li>
            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
