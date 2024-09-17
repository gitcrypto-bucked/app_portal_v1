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
        @if(Auth::user()->level=='admin')
            <li>
                <a href='{{route("register-user")}}' class="nav-link @if(Route::currentRouteName()=='register-user') {{'active'}} @endif">
                    <div class="icon-wrap">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>Cadastrar Usuario</span>
                </a>
            </li>
        @endif
        <li>
            <a href="{{route('list-news')}}" class="nav-link @if(Route::currentRouteName()=='list-news') {{'active'}} @endif">
                <div class="icon-wrap">
                    <i class="fas fa-newspaper"></i>
                </div>
                <span>Noticias</span>
            </a>
        </li>
        <li>
            <a href="{{route('add-news')}}" class="nav-link @if(Route::currentRouteName()=='add-news') {{'active'}} @endif">
                <div class="icon-wrap">
                    <i class="fa-solid fa-circle-up"></i>
                </div>
                <span>Cadastrar Noticias</span>
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
