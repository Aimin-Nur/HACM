<!-- ========== Left Sidebar Start ========== -->
@if(session('success'))
    <div id="success-toast" class="alert alert-success alert-dismissible fade position-fixed top-0 end-0 m-3 show" role="alert" style="z-index: 1050;">
        <i class="mdi mdi-check-all me-2"></i>
        <span>{{ session('success') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toast = document.getElementById('success-toast');
            setTimeout(function() {
                toast.classList.remove('show');
            }, 3000);

            // Remove session 'success' to prevent it from showing again after page reload
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        });
    </script>
@endif

@if(session('error'))
    <div id="error-toast" class="alert alert-danger alert-dismissible fade position-fixed top-0 end-0 m-3 show" role="alert" style="z-index: 1050;">
        <i class="mdi mdi-block-helper me-2"></i>
        <span>{{ session('error') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toast = document.getElementById('error-toast');
            setTimeout(function() {
                toast.classList.remove('show');
            }, 3000);

            // Remove session 'error' to prevent it from showing again after page reload
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        });
    </script>
@endif




<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="mt-3">

                <a href="#" class="text-body fw-medium font-size-16"><b>{{$getUser->name ?? ''}}</b></a> <br>
                @if ($getUser->roles == "Specialist Doctor")
                    <span class="badge bg-success">{{$getUser->roles}}</span>
                @elseif ($getUser->roles == "Doctor")
                    <span class="badge bg-info">{{$getUser->roles}}</span>
                @elseif ($getUser->roles == "Nurse")
                    <span class="badge bg-warning">{{$getUser->roles}}</span>
                @elseif ($getUser->roles == "Student")
                    <span class="badge bg-primary">{{$getUser->roles}}</span>
               @else
                    <span class="badge badge-md bg-info">Administator</span>
                @endif
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

            @auth('superadmin')
                <li>
                    <a href="{{route('dashboard-admin')}}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge rounded-pill bg-info float-end">2</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-emoticon-happy-outline"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('dashboard-admin-users')}}">Users</a></li>
                        <li><a href="{{ route('dashboard-panel') }}">Admin</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Class</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('pricing-class')}}">Pricing Class</a></li>
                        <li><a href="{{route('form-class')}}">Add Class</a></li>
                        <li><a href="{{route('show-archive-class')}}">Archive Class</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dollar"></i>
                        <span>Payment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('order-list-admin') }}">Order List</a></li>
                    </ul>
                </li>
            @endauth

            @auth('admin')
                <li>
                    <a href="{{route('dashboard')}}" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge rounded-pill bg-info float-end">2</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-emoticon-happy-outline"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('dashboard-users') }}">Users</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-calendar-check"></i>
                        <span>Class</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('pricing-class')}}">Pricing Class</a></li>
                        <li><a href="{{route('form-class')}}">Add Class</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dollar"></i>
                        <span>Payment</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('order-list') }}">Order List</a></li>
                        <li><a href="{{ route('ticket-list') }}">Ticket List</a></li>
                    </ul>
                </li>
            @endauth

            @auth('web')
            <li>
                <a href="/" class="waves-effect">
                    <i class="mdi mdi-home"></i>
                    <span>Home</span>
                </a>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="mdi mdi-calendar-check"></i>
                    <span>Class</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{route('class')}}">Class</a></li>
                    {{-- <li><a href="{{route('order-class-user')}}">Class Order</a></li> --}}
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-dollar"></i>
                    <span>Payment</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('order') }}">Order Ticket</a></li>
                </ul>
            </li>
            @endauth
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->

