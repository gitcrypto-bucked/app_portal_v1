<!--navbar -->
@php($perm = new App\Policies\PermissionPolicy(Route::currentRouteName()))
<div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white sidebar-wrap bg-darkblue" >

    <ul class="nav nav-pills flex-column mb-auto ">

        <li>
            <a href="{{route('dashboard')}}" class="nav-link @if(Route::currentRouteName()=='dashboard') {{'active'}} @endif">
                <div class="icon-wrap">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <div class="icon-wrap">
                    <i class="fab fa-first-order"></i>
                </div>
                <span>Orders</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <div class="icon-wrap">
                    <i class="fab fa-product-hunt"></i>
                </div>
                <span>Products</span>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link">
                <div class="icon-wrap">
                    <i class="fab fa-intercom"></i>
                </div>

                <span>Customers</span>
            </a>
        </li>

    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="text-decoration-none dropdown-toggle  dropdown-wrap" id="dropdownUser2"
           data-bs-toggle="dropdown" aria-expanded="false">
            <div class="icon-wrap">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle">
            </div>
            &nbsp;{!! \App\Helpers::greeting(); !!}<strong>{{Auth::user()->name}}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            {{--                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Settings</a></li>--}}
            <li><a class="dropdown-item"  href="{{route('user-profile')}}"  ><i class="fa-regular fa-user"></i> Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{url('/logout')}}">Logout</a></li>
        </ul>
    </div>
</div>
