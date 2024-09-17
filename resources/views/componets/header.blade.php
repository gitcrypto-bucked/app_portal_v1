
@php($perm = new App\Policies\PermissionPolicy(Route::currentRouteName()))

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Pedro Henrique & Low Cost contributors">
<meta name="generator" content="Pedro Henrique 0.122.0">
<title>Low Cost Portal.:Dashboard</title>
<title>{{config('app.name', 'Low Cost Portal.:Dashboard')}}</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
<!-- <link rel="stylesheet" href="./assets/css/product.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{asset('css/app.css')}}">
{{--<style>--}}
{{--    .divider:after,--}}
{{--    .divider:before {--}}
{{--        content: "";--}}
{{--        flex: 1;--}}
{{--        height: 1px;--}}
{{--        background: #eee;--}}
{{--    }--}}
{{--    .h-custom {--}}
{{--        height: calc(100% - 73px);--}}
{{--    }--}}
{{--    @media (max-width: 450px) {--}}
{{--        .h-custom {--}}
{{--            height: 100%;--}}
{{--        }--}}
{{--    }--}}
{{--    .logo--}}
{{--    {--}}
{{--        width: 125px;--}}
{{--    }--}}
{{--    .bg-gray--}}
{{--    {--}}
{{--        --bs-bg-opacity: 1;--}}
{{--        background-color: #cfdadf !important;--}}
{{--        border: solid 1px #cfdadf;--}}
{{--    }--}}
{{--    ul, li > a--}}
{{--    {--}}
{{--        color: black !important;--}}
{{--        font-weight: 470 !important;--}}
{{--        font-size:14px;--}}
{{--        text-decoration: none;--}}
{{--        padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);--}}
{{--    }--}}
{{--    .fa-icon--}}
{{--    {--}}
{{--        padding-left:5px;--}}
{{--        padding-right: 5px;--}}
{{--    }--}}
{{--    .empty-item--}}
{{--    {--}}
{{--        padding-right: 25px;--}}
{{--    }--}}
{{--    /** ------ **/--}}
{{--    .container {--}}
{{--        max-width: 960px;--}}
{{--    }--}}
{{--    .icon-link > .bi {--}}
{{--        width: .75em;--}}
{{--        height: .75em;--}}
{{--    }--}}
{{--    /*--}}
{{--    * Custom translucent site header--}}
{{--    */--}}
{{--    .site-header {--}}
{{--        background-color: rgba(0, 0, 0, .85);--}}
{{--        -webkit-backdrop-filter: saturate(180%) blur(20px);--}}
{{--        backdrop-filter: saturate(180%) blur(20px);--}}
{{--    }--}}
{{--    .site-header a {--}}
{{--        color: #8e8e8e;--}}
{{--        transition: color .15s ease-in-out;--}}
{{--    }--}}
{{--    .site-header a:hover {--}}
{{--        color: #fff;--}}
{{--        text-decoration: none;--}}
{{--    }--}}
{{--    input, input[type=text],input[type=password], input[type=email]--}}
{{--    {--}}
{{--        font-size: 14px !important;--}}
{{--    }--}}
{{--    button--}}
{{--    {--}}
{{--        font-size: 16px !important;--}}
{{--    }--}}

{{--    .main {--}}
{{--        display: flex;--}}
{{--        flex-wrap: nowrap;--}}
{{--        height: 98vh--}}
{{--        height: -webkit-fill-available;--}}
{{--        max-height: 98vh;--}}
{{--        overflow-x: auto;--}}
{{--        overflow-y: hidden;--}}
{{--    }--}}

{{--    /** Sidebar **/--}}
{{--    .cd__main{--}}
{{--        position: relative;--}}
{{--        display: block !important;--}}
{{--    }--}}
{{--    .sidebar-wrap {--}}
{{--        width: 60px;--}}
{{--        height: 92.3vh;--}}
{{--        color: #fff;--}}
{{--        padding: 10px;--}}
{{--        transition: 0.8s;--}}
{{--    }--}}
{{--    .sidebar-wrap:hover {--}}
{{--        width: 280px;--}}
{{--    }--}}
{{--    .sidebar-wrap:hover .logo-wrap span {--}}
{{--        display: flex;--}}
{{--    }--}}
{{--    .sidebar-wrap:hover .nav li .nav-link span {--}}
{{--        display: flex;--}}
{{--    }--}}
{{--    .sidebar-wrap:hover .dropdown-wrap strong {--}}
{{--        display: flex;--}}
{{--    }--}}
{{--    .sidebar-wrap:hover .dropdown-wrap::after {--}}
{{--        display: inline-block;--}}
{{--    }--}}
{{--    .sidebar-wrap:hover .dropdown-wrap {--}}
{{--        justify-content: flex-start;--}}
{{--    }--}}
{{--    .sidebar-wrap .logo-wrap {--}}
{{--        color: #fff;--}}
{{--        font-size: 35px;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        gap: 10px;--}}
{{--    }--}}
{{--    .sidebar-wrap .logo-wrap span {--}}
{{--        font-size: 18px;--}}
{{--    }--}}
{{--    .sidebar-wrap .logo-wrap .icon-wrap {--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: center;--}}
{{--        height: 40px;--}}
{{--        min-width: 40px;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav {--}}
{{--        height: 100%;--}}
{{--        overflow-x: hidden;--}}
{{--        overflow-y: auto;--}}
{{--        flex-wrap: nowrap;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav::-webkit-scrollbar-track {--}}
{{--        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);--}}
{{--        border-radius: 5px;--}}
{{--        background-color: #f5f5f5;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav::-webkit-scrollbar {--}}
{{--        width: 5px;--}}
{{--        background-color: #f5f5f5;--}}
{{--        border-radius: 5px;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav::-webkit-scrollbar-thumb {--}}
{{--        border-radius: 5px;--}}
{{--        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);--}}
{{--        background-color: #9b9b9b;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav li {--}}
{{--        margin-top: 5px;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav li .nav-link {--}}
{{--        color:#E9EAEC !important;--}}
{{--        padding: 0;--}}
{{--        font-size: 20px;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        gap: 5px;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav li .nav-link .icon-wrap {--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: center;--}}
{{--        height: 40px;--}}
{{--        min-width: 40px;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav li .nav-link span {--}}
{{--        font-size: 16px;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav li .nav-link.active {--}}
{{--        background-color: #ffa200;--}}
{{--    }--}}
{{--    .sidebar-wrap .nav li .nav-link:hover {--}}

{{--        background-color: #ffa200;--}}
{{--    }--}}
{{--    .sidebar-wrap .dropdown-wrap {--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        color: #fff;--}}
{{--        gap: 15px;--}}
{{--        font-size: 16px;--}}
{{--    }--}}
{{--    .sidebar-wrap .dropdown-wrap .icon-wrap {--}}
{{--        min-width: 40px;--}}
{{--        height: 40px;--}}
{{--        display: flex;--}}
{{--        align-items: center;--}}
{{--        justify-content: center;--}}
{{--    }--}}

{{--    .bg-darkblue--}}
{{--    {--}}
{{--        background-color: #333652 !important;--}}
{{--    }--}}
{{--</style>--}}
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom bg-gray" data-bs-theme="gray">
    <div class="container-xxl">
        <a class="navbar-brand d-md-none" href="{{url('/')}}">
            <img class="logo" alt="logo" src="{{url('logo/logo.png')}}">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-light" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <a class="nav-link " href="{{url('/')}}">
                    <img class="logo" alt="logo" src="{{asset('logo/logo.png')}}">
                </a>
                <ul class="navbar-nav flex-grow-2  ms-auto">
                    <li class="nav-item">

                    </li>
                    @if(!auth()->user())
                        <li class="nav-item"><a class="nav-link" href="{{ url('/')}}">Home</a></li>
                    @elseif(auth()->user())
                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard')}}">Home</a></li>
                    @endif
                    @if($perm->getHasInventario())
                        <li class="nav-item"><a class="nav-link" href="#">Invent&aacuterio</a></li>
                    @endif
                    @if($perm->getHasChamadas())
                        <li class="nav-item"><a class="nav-link" href="#">Chamadas</a></li>
                    @endif
                    @if($perm->getHasTraking())
                        <li class="nav-item"><a class="nav-link" href="#">Tracking</a></li>
                    @endif
                    @if($perm->getHasContato())
                        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                    @endif
                    <li class="nav-item">

                        @if(Route::has('login') & !auth()->user())
                            <button class="btn " type="submit" onclick="location.href='{{route('login')}}'" style="font-size:14px !important;">
                                <i class="fas fa-sign-in"></i>&nbsp;Login
                            </button>
                        @endif
                        @if (Auth::check())
                            <button class="btn" type="submit" onclick="location.href='{{route('logout')}}'" style="font-size:14px !important;">
                                <i class="fa-solid fa-right-from-bracket fa-icon"></i>&nbsp;Logout
                            </button>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
