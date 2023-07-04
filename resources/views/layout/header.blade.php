<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo"><a href="{{ route('dashboard.index') }}" class="logo"><i
                        class="mdi mdi-bowling text-success mr-1"></i> <span class="hide-phone">{{ config('app.name') }}</span></a>
            </div><!-- End Logo container-->
            <div class="menu-extras topbar-custom">
                <ul class="list-unstyled float-right mb-0">
                    <!-- language-->
                    <li class="dropdown notification-list"><a
                            class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"><i
                                class="dripicons-mail noti-icon"></i> <span
                                class="badge badge-danger noti-icon-badge">0</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg border-0">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5><span class="badge badge-danger float-right">0</span>Messages</h5>
                            {{-- </div><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/avatar-2.jpg" alt="user-img"
                                        class="img-fluid rounded-circle"></div>
                                <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy
                                        text of the printing and typesetting industry.</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/avatar-3.jpg" alt="user-img"
                                        class="img-fluid rounded-circle"></div>
                                <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have
                                        87 unread messages</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon"><img src="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/avatar-4.jpg" alt="user-img"
                                        class="img-fluid rounded-circle"></div>
                                <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a
                                        long established fact that a reader will</small></p>
                            </a><!-- All--> <a href="javascript:void(0);"
                                class="dropdown-item notify-item border-top">View All</a> --}}
                        </div>
                    </li><!-- notification-->
                    <li class="dropdown notification-list"><a
                            class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"><i
                                class="dripicons-bell noti-icon"></i> <span
                                class="badge badge-success noti-icon-badge">0</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg border-0">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Notification (0)</h5>
                            {{-- </div><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b>Your order is placed</b><small
                                        class="text-muted">Dummy text of the printing and typesetting
                                        industry.</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details"><b>New Message received</b><small class="text-muted">You
                                        have 87 unread messages</small></p>
                            </a><!-- item--> <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It
                                        is a long established fact that a reader will</small></p>
                            </a><!-- All--> <a href="javascript:void(0);"
                                class="dropdown-item notify-item border-top">View All</a> --}}
                        </div>
                    </li><!-- User-->
                    <li class="dropdown notification-list"><a
                            class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false"><img src="{{ asset('Zoogler/mannatthemes.com/zoogler/horizontal') }}/assets/images/users/avatar-1.jpg" alt="user"
                                class="rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown border-0">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5>Welcome</h5>
                            </div><a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="{{ route('logout') }}"><i
                                    class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                        </div>
                    </li>
                    <li class="menu-item">
                        <!-- Mobile menu toggle--> <a class="navbar-toggle nav-link">
                            <div class="lines"><span></span> <span></span> <span></span></div>
                        </a><!-- End mobile menu toggle-->
                    </li>
                </ul>
            </div><!-- end menu-extras -->
            <div class="clearfix"></div>
        </div><!-- end container -->
    </div><!-- end topbar-main -->
    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu"><a href="{{ route('dashboard.index') }}"><i class="dripicons-device-desktop"></i>Dashboard</a></li>
                    <li class="has-submenu"><a href="{{ route('pos.index') }}"><i class="dripicons-blog"></i>Daftar Pos</a></li>
                    <li class="has-submenu"><a href="{{ route('data.index') }}"><i class="dripicons-blog"></i>Data Stasiun</a></li>
                </ul><!-- End navigation menu -->
            </div><!-- end #navigation -->
        </div><!-- end container -->
    </div><!-- end navbar-custom -->
</header><!-- End Navigation Bar-->
