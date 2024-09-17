@include('header')
<!--navbar end-->
<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                     class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form id="formLogin" method="POST" action="{{route('update-password')}}">
                    @csrf
                    @if(Session::has('error'))
                        <div class="alert alert-success bg-danger text-white" id="error">
                            {{ Session::get('error')}}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success text-white bg-success" id="sucess">
                            {{ session('success') }}
                        </div>
                        {{'<script>window.location.href="/login"</script>'}}
                    @endif
                    @if(isset($user))
                        @php(@$user = (json_decode(@$user,true)))
                    @endif
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Atualizar Senha</p>
                        <input type="hidden" id="token" name="token" value="{{@$token}}">
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="empresa">Empresa</label>
                        <input type="text" id="empresa" name="empresa" class="form-control form-control-lg"
                               maxlength="191" value="{{@$user[0]['empresa']}}" readonly />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="name">Nome</label>
                        <input type="text" id="name" name="name" class="form-control form-control-lg"
                                 value="{{@$user[0]['name']}}"  readonly />
                    </div>
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="empresa">E-mail</label>
                        <input type="text" id="email" name="email" class="form-control form-control-lg"
                               maxlength="191" value="{{@$user[0]['email']}}" readonly />
                    </div>
                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Senha</label>
                        <input type="password" id="password" name='password' class="form-control form-control-lg"
                               placeholder="Informe sua senha" required aria-required="true"/>
                    </div>
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Confirme sua senha</label>
                        <input type="password" id="passwordConfirmation" name='passwordConfirmation' class="form-control form-control-lg"
                               placeholder="Informe sua senha" required aria-required="true"/>

                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" name='remember_token' id="remember_token" />
                            <label class="form-check-label" for="remember_token" style="font-size: 14px">
                                Mostar Senha?
                            </label>
                        </div>
                    </div>
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                                 style="padding-left: 2.5rem; padding-right: 2.5rem;">Salvar</button>

                        {{--
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                           class="link-danger">Register</a></p>
                        --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div
        class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-gray">
        <!-- Copyright -->
        <div class="text-black mb-3 mb-md-0">
            © {{date('Y')}}. Todos direitos reservados.
        </div>
        <!-- Copyright -->
        <!-- Right -->
        <!-- Right -->
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>
    setTimeout(function (){
        const error = document.getElementById('error');
        if(error!=undefined)
        {
            error.style.display="none";
        }
    },6200);

    const togglePassword = document.getElementById('remember_token');
    const password = document.getElementById('password');
    const cfpassword = document.getElementById('passwordConfirmation');

    togglePassword.addEventListener("click", function () {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        cfpassword.setAttribute("type", type);
        // toggle the icon
    });
</script>
</body>
</html>
