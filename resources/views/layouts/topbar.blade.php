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
                        <span class="d-none d-xl-inline-block ms-1">{{$getUser->name ?? ''}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i
                                class="bx bx-user font-size-16 align-middle me-1"></i>
                            Profile</a>
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
                            <img src="{{ URL::asset('build/imageds/logo-sm.png') }}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('build/imagdes/logo-dark.png') }}" alt="" height="17">
                        </span>
                    </a>

                    <a href="index" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ URL::asset('build/idmages/logo-sm.png') }}" alt="" height="20">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ URL::asset('build/imadges/logo-light.png') }}" alt="" height="19">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                    id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>

                <div class="dropdown dropdown-mega d-none d-lg-inline-block ms-2">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="false" aria-expanded="false">
                        Mega Menu
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">UI Components</h5>
                                        <ul class="list-unstyled megamenu-list text-muted">
                                            <li>
                                                <a href="javascript:void(0);">Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Rating</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Forms</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tables</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Charts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">Applications</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Ecommerce</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Calendar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Email</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Projects</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Tasks</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Contacts</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">Extra Pages</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">Light Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Compact Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Horizontal layout</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Maintenance</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Coming Soon</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">Timeline</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">FAQs</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14 mt-0">Components</h5>
                                        <div class="px-lg-2">
                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/github.png') }}" alt="Github">
                                                        <span>GitHub</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/bitbucket.png') }}" alt="bitbucket">
                                                        <span>Bitbucket</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/dribbble.png') }}" alt="dribbble">
                                                        <span>Dribbble</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row g-0">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/dropbox.png') }}" alt="dropbox">
                                                        <span>Dropbox</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/mail_chimp.png') }}"
                                                            alt="mail_chimp">
                                                        <span>Mail Chimp</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="{{ URL::asset('build/images/brands/slack.png') }}" alt="slack">
                                                        <span>Slack</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div>
                                            <div class="card text-white mb-0 overflow-hidden text-white-50"
                                                style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                <div class="card-img-overlay"></div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <h4 class="text-white mb-3">Sale</h4>

                                                            <h5 class="text-white-50">Up to <span
                                                                    class="font-size-24 text-white">50 %</span> Off
                                                            </h5>
                                                            <p>At vero eos accusamus et iusto odio.</p>
                                                            <div class="mb-4">
                                                                <a href="#" class="btn btn-success btn-sm">View
                                                                    more</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
