@include('lowcost.header_lowcost')
<title>Low Cost Portal.:Cadastro de Usuarios</title>

<!--navbar end-->
<div class= "main ">
    <!-- sidebar-->
    @include('lowcost.left-menu')

    <!--sidebar end-->
    <div class="d-flex row container-xxl px-5 py-3 ">
        <div class="row container">
            <!--form cadastro -->
            <div class="col-md-6 " >
                <h5 >Cadastro de Usuarios</h5>
                <hr>

                <form id="newsForm" method="POST" autocomplete="off" action="{{route('register')}}" enctype="multipart/form-data">
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
                    @endif
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="titulo" maxlength="191" minlength="6">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="intro" maxlength="191">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_email" class="form-label">Confirmação E-mail:</label>
                        <input type="email" class="form-control" id="confirm_email" name="confirm_email" aria-describedby="weblink" maxlength="191">
                    </div>
                    <div class="mb-3">
                        <label for="empresa" class="form-label">Empresa:</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" aria-describedby="empresa" maxlength="191" minlength="2">
                    </div>
                    <div class="mb-3">
                        <label for="centrocusto" class="form-label">Centro de Custo:</label>
                        <input type="text" class="form-control" id="centrocusto" name="centrocusto" aria-describedby="centrocusto" maxlength="191" minlength="2">
                    </div>
                    <div class="mb-3">
                            <label for="tipo" class="form-label">Nivel Permissão</label>
                            <select  class="form-control" id="tipo" name="tipo"  required>
                                <option selected value="0">Selecione o nivel permissão</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="admin">Admin</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-danger" onclick="reset()">Cancelar</button>

                    </div>
                </form>
            </div>
            <!--form cadastro end -->
            <div class="col-md-6 px-10" >

            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script>


    function reset()
    {
        document.getElementById('newsForm').reset();
        document.getElementById('url').disabled=false;
        document.getElementById('ftitle').value = 'titulo noticia?';
        document.getElementById('fintro').innerHTML= '...placeholder....';
        const a = document.createElement('a');
        a.className ='link';
        a.target='_blank';
        a.innerHTML='..Continuar lendo..'
        document.getElementById('fintro').appendChild(a);
    }

    window.onload= setTimeout(function(){
        const sucess = document.getElementById('sucess');
        console.log(sucess)
        if(sucess!=undefined)
        {
            sucess.style.display="none";
        }
        const error = document.getElementById('error');
        console.log(error)
        if(error!=undefined)
        {
            error.style.display="none";
        }
    },6000)
</script>
</body>
</html>
