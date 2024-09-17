<head>

    <title>Low Cost Portal.:Link Expirado</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <!-- <link rel="stylesheet" href="./assets/css/product.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css" integrity="sha512-EJp8vMVhYl7tBFE2rgNGb//drnr1+6XKMvTyamMS34YwOEFohhWkGq13tPWnK0FbjSS6D8YoA3n3bZmb3KiUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
@include('header')
<div id="content" class="container py-5 container-limit--md">

    <div class="card">
        <div class="p-5 container container-limit--sm">
            <div id="forgottenPassword">
                <h1>Link Expirado</h1>
                <p>Seu link de redefinição de senha expirou, se você ainda deseja redefinir sua senha esquecida, vá para a página de senha esquecida</p>
                <a class="btn btn-outline-primary btn-lg" href="{{url('/')}}">Home</a>
            </div>
        </div>
    </div>

</div>
