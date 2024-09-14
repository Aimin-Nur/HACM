<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-end">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                        aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-sm-inline-block">
                    <div class="dropdown-menu dropdown-menu-end">
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">

                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="https://cdn-icons-png.flaticon.com/512/3541/3541871.png">
                        <span class="d-none d-xl-inline-block ms-1">{{$getUser->name ?? ''}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); logoutUser();">
                                <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout
                        </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            <script>
                                function logoutUser() {
                                    const currentRole = '{{ auth()->guard('web')->check() ? 'user' : (auth()->guard('admin')->check() ? 'admin' : (auth()->guard('superadmin')->check() ? 'superadmin' : '')) }}';

                                    let logoutForm = document.getElementById('logout-form');

                                    switch (currentRole) {
                                        case 'admin':
                                            logoutForm.action = '{{ route('logout-admin') }}';
                                            break;
                                        case 'superadmin':
                                            logoutForm.action = '{{ route('logout-superadmin') }}';
                                            break;
                                        case 'user':
                                        default:
                                            logoutForm.action = '{{ route('logout') }}';
                                            break;
                                    }

                                    logoutForm.submit();
                                }
                            </script>

                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                        aria-controls="offcanvasExample">
                        <i class="mdi mdi-settings-outline"></i>
                    </button>
                </div>

            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img class="img-fluid" src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="19">
                        </span>
                    </a>

                    <a href="index" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img class="img-fluid" src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="19">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>



            </div>

        </div>
    </div>
</header>
