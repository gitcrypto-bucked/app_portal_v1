@php(  $news =  App\Http\Controllers\NewsController::getAllNews())
<!doctype html>
<html lang="pt" data-bs-theme="light">
   <head>
      <script src="{{asset('js/color-modes.js')}}"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Pedro Henrique & Low Cost contributors">
      <meta name="generator" content="Pedro Henrique 0.122.0">
      <title>Low Cost Portal</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
      <!-- <link rel="stylesheet" href="./assets/css/product.css"> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
         .logo
         {
         width: 125px;
         }
         .bg-gray
         {
         --bs-bg-opacity: 1;
         background-color: #cfdadf !important;
         border: solid 1px #cfdadf;
         }
         ul, li > a
         {
         color: black !important;
         font-weight: 470 !important;
         font-size:14px;
         text-decoration: none;
         padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
         }

         .fa-icon
         {
         padding-left:5px;
         padding-right: 5px;
         }
         .empty-item
         {
         padding-right: 25px;
         }
         /** ------ **/
         .container {
         max-width: 960px;
         }
         .icon-link > .bi {
         width: .75em;
         height: .75em;
         }
         /*
         * Custom translucent site header
         */
         .site-header {
         background-color: rgba(0, 0, 0, .85);
         -webkit-backdrop-filter: saturate(180%) blur(20px);
         backdrop-filter: saturate(180%) blur(20px);
         }
         .site-header a {
         color: #8e8e8e;
         transition: color .15s ease-in-out;
         }
         .site-header a:hover {
         color: #fff;
         text-decoration: none;
         }
         /*
         * Dummy devices (replace them with your own or something else entirely!)
         */
         .product-device {
         position: absolute;
         right: 10%;
         bottom: -30%;
         width: 300px;
         height: 540px;
         background-color: #333;
         border-radius: 21px;
         transform: rotate(30deg);
         }
         .product-device::before {
         position: absolute;
         top: 10%;
         right: 10px;
         bottom: 10%;
         left: 10px;
         content: "";
         background-color: rgba(255, 255, 255, .1);
         border-radius: 5px;
         }
         .product-device-2 {
         top: -25%;
         right: auto;
         bottom: 0;
         left: 5%;
         background-color: #e5e5e5;
         }
         /*
         * Extra utilities
         */
         .flex-equal > * {
         flex: 1;
         }
         @media (min-width: 768px) {
         .flex-md-equal > * {
         flex: 1;
         }
         }
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
         .b-example-divider {
         width: 100%;
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
         }
         .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
         }
         .bi {
         vertical-align: -.125em;
         fill: currentColor;
         }
         .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
         }
         .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
         }
         .btn-bd-primary {
         --bd-violet-bg: #712cf9;
         --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
         --bs-btn-font-weight: 600;
         --bs-btn-color: var(--bs-white);
         --bs-btn-bg: var(--bd-violet-bg);
         --bs-btn-border-color: var(--bd-violet-bg);
         --bs-btn-hover-color: var(--bs-white);
         --bs-btn-hover-bg: #6528e0;
         --bs-btn-hover-border-color: #6528e0;
         --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
         --bs-btn-active-color: var(--bs-btn-hover-color);
         --bs-btn-active-bg: #5a23c8;
         --bs-btn-active-border-color: #5a23c8;
         }
         .bd-mode-toggle {
         z-index: 1500;
         }
         .bd-mode-toggle .dropdown-menu .active .bi {
         display: block !important;
         }
         /**-------date -22/08 ---*/
         .welcome-text {
         color: #2d862d;
         font-family: "Open Sans", sans-serif;
         font-weight: 700 !important;
         }
         .text-decoration-underline {
         border-block-start: ;
         text-decoration-color: #0981AF !important;
         text-decoration-skip: unset !important;
         -webkit-text-decoration-skip: unset;
         text-underline-offset: 1px !important;
         word-spacing: normal !important;
         font-family: "Open Sans", sans-serif;
         font-weight: 700 !important;
         }
         .text-simple
         {
         font-size: 16px;
         }
         .gradient-custom {
         background: #31cb97;
         background: -webkit-linear-gradient(to right, #B8DDF1, #2ba762);
         background: linear-gradient(to right, #B8DDF1, #2ba762);
         border-radius: 20px;
         }
         .calculator-svg {
         padding-top: 20px !important;
         padding-bottom: 10px;
         padding-left: 10px;
         width: 40vh;

         }
         .undraw_engineering_team_a7n2 {
         padding-top: 60px;
         padding-bottom: 70px;
         padding-left: 10px;
/*         width:15vw;;*/
            width:45%;
         }

         @media only screen and (width: 1440px)
         {
            .calculator-svg
            {
               margin-top: 30px !important;
               padding-bottom: 10px;
               left:0 !important;
               z-index: 999;
               position: absolute;
               width:220px;
               height:220px;
            }
            .undraw_engineering_team_a7n2
            {
               padding-top: 90px;
               padding-bottom: 70px;
               padding-left: 10px;
                  width:45%;
            }

            .botton-btn
            {
               padding-top:none !important;
            }

            .pesquisa-svg
            {
               height: 85%;
               padding-left: 10px;
            }
         }

         @media only screen and (max-width: 1920px)
         {
              .calculator-svg {
               position: absolute;
                  padding-top: 30px !important;
                  padding-bottom: 22px;
                  padding-left: 10px;
                  width: 45vh;

               }
               .undraw_engineering_team_a7n2 {
               padding-top: 60px;
               padding-bottom: 70px;
               padding-left: 10px;
      /*         width:15vw;;*/
                  width:45%;
               }
         }


         .simpletext {
         font-size: 16px;
         word-break: break-word;
         font-family: "Arial" font-wieght: 330;
         }
         .card-btn {
         border-radius: 20px;
         width: 150px;
         }
         .fa-chevron-right
         {
         position: relative;
         right: -15px;
         align-items: center;
         }
         .big-text {
         font-size: 77px;
         font-weight: 300;
         font-family: 'Arial';
         /* position: absolute;
         margin-top: 2px;
         padding-left: 5px;*/
         line-height: 62px;
         }
         .tracking {
         background-color: #AFE2FF !important;
         border-radius: 20px;
         }
         .inventario {
         background-color: #DCF0E4 !important;
         border-radius: 20px;
         }
         .pesquisa {
         background-color: #DCE9F0 !important;
         border-radius: 20px;
         }
         .grid-container {
         display: grid;
         grid-template-columns: 1fr 1fr;
         grid-gap: 0px;
         }
         .tracking-svg {
         height: auto;
         padding-top: 20px;
         padding-bottom: 20px;
         }
         .inventario-svg {
         height: auto;
         padding-top: 24px;
         padding-bottom: 20px;
         }


         .mt-30
         {
         margin-top: 30px !important;
         }
         .ml-2
         {
         margin-left: 2px !important;
         }
         .green
         {
         text-align: right;
         }

         .hy-10
         {
            height: 10% !important;
         }

         .botton-btn
         {
             padding-top: 3vh;
         }

         .news-img
         {
            border-radius: 5px;
         }


         date
         {
            font-size: 12px;
         }

         bold
         {
            font-size: 16px;
            font-weight: 670;
            color:black;
         }

         .smalltext
         {
            font-size: 14px;
         }

         .link
         {
            color:#0E86D4;
            text-decoration: underline;
            font-weight: bold;
            cursor: pointer;
         }

         .link:hover
         {
            color:#0000FF;
            /** #145DA0 **/
         }

      </style>
      <!-- Custom styles for this template -->
   </head>
   <body>
      <!-- color modes start-->
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
         <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
         </symbol>
         <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
         </symbol>
         <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
         </symbol>
         <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
         </symbol>
      </svg>
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
         <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
            id="bd-theme"
            type="button"
            aria-expanded="false"
            data-bs-toggle="dropdown"
            aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
               <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">tema</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em">
                     <use href="#sun-fill"></use>
                  </svg>
                  Light
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                  <svg class="bi me-2 opacity-50" width="1em" height="1em">
                     <use href="#moon-stars-fill"></use>
                  </svg>
                  Dark
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>

         </ul>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
         <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"/>
            <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
         </symbol>
         <symbol id="cart" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
         </symbol>
         <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
         </symbol>
      </svg>
      <!--color modes end-->
      <!--navbar start -->
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
                     <li class="nav-item"><a class="nav-link" href="#">Invent&aacuterio</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Chamadas</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Tracking</a></li>
                     <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
                     <li class="nav-item">
                        {{-- <button class="btn " type="submit">
                        <i class="fa-solid fa-right-from-bracket fa-icon"></i>Sair
                        </button> --}}
                         @if(Route::has('login') & !auth()->user())
                        <a class="btn "  href="{{route('login')}}" style="font-size:14px !important;">
                           <i class="fas fa-sign-in"></i>&nbsp;Login
                        </a>
                        @endif
                        @if (Auth::check())
                        <a class="btn " type="submit"  href="{{route('logout')}}" style="font-size:14px !important;">
                           <i class="fa-solid fa-right-from-bracket fa-icon"></i>&nbsp;Logout
                        </a>
                        @endif
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <!--navbar end-->
      <main>
         <!--wellcome -->
         <div class="position-relative overflow-hidden p-3 p-md-3 m-md-3  " id="wellcome">
            <div class=" container-xxl">
               <p class="display-6  fs-2 fw-bold align-items-star welcome-text text-decoration-underline">Bem vindo, Usuário!</p>
               <p class="fw-normal fs-2 text-muted mb-3">
               <p class="text-simple">Bem vindo ao portal Portal do CLiente LowCost. Aqui você pode ter controle completo dos equipamentos que sua empresa possui em locação, revisitar locações antigas e renovar contratos e muito mais</p>
               </p>
            </div>
            <!-- <div class="product-device shadow-sm d-none d-md-block"></div>
               <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
         </div>
         <!--wellcome end -->
         <!--first-->
         <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3  container-xxl">
            <!--faturamento-->
            <div class="gradient-custom me-md-3 pt-0 px-0 pt-md-0 px-md-0 text-left overflow-hidden text-white  hy-10" >
               <div class="container align-items-start" >
                  <div class="my-3 py-3 px-3 col" style="float:right;paddign-top:20px; text-align: right; position: relative;">
                     <h5>Faturamento</h5>
                     <p class="simpletext">Monitore o status dos <br> pagamentos realizados e <br>pendentes.</p>
                     <br><br>
                     <button type="button" class="btn  btn-light card-btn">Ver todos&nbsp;&nbsp;
                     <i class="fa-solid fa-chevron-right "> </i>
                     </button>
                  </div>
                  <div class="my-0 py-0 col">
                     <img alt="" src="{{asset('img/calculator.svg')}}" class="calculator-svg img-fluid">
                  </div>
               </div>
            </div>
            <!--faturamento end-->
            <!--chamadas-->
            <div class="gradient-custom me-md-3 pt-0 px-0 pt-md-0 px-md-0 text-left overflow-hidden text-white  hy-10" >
               <div class="container">
                  <div class="my-3 py-3 px-3 col" style="float:right;paddign-top:20px;text-align: right; position:relative;">
                     <h5>Chamados</h5>
                     <p class="simpletext">Nos últimos 30 dias.</p>
                     <!--- -->
                     <ul>
                        <li style="list-style-type: none;">
                           <a class="simpletext text-white" style="padding-right: 30px;">Abertos</a>
                           <a class="simpletext text-white">Concluídos</a>
                        </li>
                        <li style="list-style-type: none;">
                           <a class="big-text  text-white" style="padding-right: 66px;">8</a>
                           <a class="big-text  text-white" style="padding-right: 6px;">7</a>
                        </li>
                     </ul>
                     <!--- -->
                     <button type="button" class="btn  btn-light card-btn">Ver todos&nbsp;&nbsp;<i class="fa-solid fa-chevron-right "> </i></button>
                  </div>
                  <div class="my-0 py-0 col">
                     <img alt="" src="{{asset('img/undraw_engineering_team_a7n2.svg')}}" class="undraw_engineering_team_a7n2 img-fluid">
                  </div>
               </div>
               <div class="bg-body-tertiary shadow-sm mx-auto" ></div>
            </div>
            <!--chamadas end-->
         </div>
         <!--first end-->
         <!--second -->
         <div class="container-xxl text-black d-md-flex flex-md-equal w-100 my-md-3 ps-md-3 mt-30" >
            <!-- tracking -->
            <div class="row align-items-start text-black me-md-0 pt-0 px-0 pt-md-0 px-md-0 overflow-hidden ml-2" >
               <div class="col-sm me-md-3 tracking w-100 h-100 mr-20 d-inline-block " >
                  <div class="grid-container " style="padding-right: 10px;margin-top:25px; ">
                     <div class="grid-child purple">
                        <img src="{{asset('img/Group_2.svg')}}" class="tracking-svg" alt="tracking">
                     </div>
                     <div class="grid-child green" style="text-align: right;">
                        <h5>Tracking</h5>
                        <p class="simpletext">Acompanhe a entrega <br> dos seus equipamentos.</p>
                        <div style="padding-top: 8vh;">
                           <button type="button" class="btn  btn-light card-btn">Ir&nbsp;&nbsp;<i class="fa-solid fa-chevron-right "> </i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- tracking end-->
               <!-- inventario -->
               <div class="col-sm me-md-3 inventario w-100 h-100 mr-20 d-inline-block " >
                  <div class="grid-container " style="padding-right: 10px;margin-top:25px; ">
                     <div class="grid-child purple">
                        <img src="{{asset('img/Group_25.svg')}}" class="inventario-svg" alt="inventario">
                     </div>
                     <div class="grid-child green" style="text-align: right;">
                        <h5>Inventário</h5>
                        <p class="simpletext">Um controle completo<br>de todos os seus <br>equipamentos e <br>serviços.</p>
                        <div style="padding-top: 3vh;">
                           <button type="button" class="btn  btn-light card-btn">Ir&nbsp;&nbsp;<i class="fa-solid fa-chevron-right "> </i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- inventario end-->
               <!--pesquisa -->
               <div class="col me-md-3 pesquisa w-100 h-100 mr-20 d-inline-block" >
                  <div class="grid-container" style="padding-right: 10px;margin-top:25px; ">
                     <div class="grid-child purple" style="padding-top:15px">
                        <img src="{{asset('img/pesquisa.svg')}}" alt="pesquisa" class="pesquisa-svg">
                     </div>
                     <div class="grid-child green">
                        <h5>Pesquisa de Satisfação</h5>
                        <p class="simpletext">Acesse os resultados<br>das pesquisas<br>realizadas.</p>
                        <div  class="botton-btn" id="botton-btn">
                           <button type="button" class="btn  btn-light card-btn">Ir&nbsp;&nbsp;<i class="fa-solid fa-chevron-right "> </i></button>
                        </div>
                     </div>
                  </div>
               </div>
               <!--pesquisa end-->
            </div>
         </div>

      </main>
      <footer class="container-xxl py-5">
         <div class="row">

            <div class="col-6 ">
               <h5 class="mb-3">Últimas Noticias</h5>
                @for($i=0; $i<sizeof($news); $i++    )
                   <figure class="d-flex">
                      <div class="flex-shrink-0">
                          <img src="{{asset('storage/thumb/'.$news[$i]->thumb)}}" alt="" width="110" height="80" class="news-img">
                      </div>
                      <div class="ms-3">
                           <div class="text-nowrap  " style="width: 6rem;">
                               <date>{{date('d/m/Y',strtotime($news[$i]->created_at))}}&nbsp;</date><bold>{{$news[$i]->title}}</bold>
                           </div>
                          <p class="smalltext">{{$news[$i]->intro}}&nbsp;<a class="link" href="{{$news[$i]->url}}" target="_blank">...Continuar lendo...</a></p>
                      </div>
                  </figure>
                @endfor
                {{$news->links()}}

            </div>

         </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
      <script>

          window.onresize = adjust();
          window.onload = adjust();
         function adjust()
         {
            if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
              // true for mobile device
               var btn = document.getElementById('botton-btn');
               btn.style.paddingTop="0vh";
            }
            else
            {
                let btn = document.getElementById('botton-btn');
                btn.style.paddingTop="3vh";
            }
         }
      </script>
   </body>
</html>
