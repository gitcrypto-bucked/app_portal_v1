@include('lowcost.header_lowcost')
<title>Low Cost Portal.:Cadastra Noticias</title>
<div class="main ">
    <!-- sidebar-->
    @include('lowcost.left-menu')

    <div class="d-flex row container-xxl px-5 py-3 ">
        <div class="row container">
            <!--form cadastro -->
            <div class="col-md-6 " >
                <h5 >Cadastro de Noticias</h5>
                <hr class="mb-3">

                <form id="newsForm" method="POST" autocomplete="off" action="{{route('add_news')}}" enctype="multipart/form-data">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-success bg-danger text-white" id="error">
                            {{$errors->first()}}
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success text-white bg-success" id="sucess">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="titulo" maxlength="191">
                        <div id="emailHelp" class="form-text">Ex: Comprar ou alugar tecnologias para seus eventos?.</div>
                    </div>
                    <div class="mb-3">
                        <label for="intro" class="form-label">Intro</label>
                        <input type="text" class="form-control" id="intro" name="intro" aria-describedby="intro" maxlength="191">
                        <div id="emailHelp" class="form-text">Breve abordagem do tema.</div>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Artigo URL:</label>
                        <input type="text" class="form-control" id="url" name="url" aria-describedby="url" maxlength="191" required>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Imagem Thumbnail</label>
                        <input type="file" class="form-control" id="thumb" name="thumb" aria-describedby="thumb"  accept="image/*">
                        <div id="thumb" class="form-text">Thumbnail .</div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-danger" onclick="reset()">Cancelar</button>

                    </div>
                </form>
            </div>
            <!--form cadastro end -->
            <div class="col-md-6 px-10" >
                <h5 >Exibição</h5>
                <hr class="mb-3">
                <figure class="d-flex">
                    <div class="flex-shrink-0">
                        <img src="thumb/news_1.jpg" alt=""  height="80" class="news-img" id="preview_img">
                    </div>
                    <div class="ms-3">
                        <div class="text-nowrap  " style="width: 8rem;">
                            <date style="font-size:15px">{{date('d/m/Y')}}&nbsp;</date><bold id="ftitle">titulo noticia?</bold>
                        </div>
                        <p class="smalltext" id="fintro">...placeholder.... <a class="link">..Continuar lendo..</a></p>
                    </div>
                </figure>
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
            const thumb = document.getElementById('thumb');
            thumb.onchange = evt => {
                const [file] = thumb.files
                if (file) {
                    document.getElementById('preview_img').src = URL.createObjectURL(file)
                }
            }

            let input = document.getElementById('titulo');
            let out = document.getElementById('ftitle');
            input.onkeyup = function() {
                out.innerHTML = input.value;
            }

            $("#intro").blur(function (){
                document.getElementById('fintro').innerHTML = document.getElementById('intro').value;
            });

            $("#weblink").blur(function(){
                const a = document.createElement('a');
                a.className ='link';
                a.target='_blank';
                a.innerHTML='..Continuar lendo..'
                a.href= document.getElementById('weblink').value;
                document.getElementById('fintro').appendChild(a);
                document.getElementById('weblink').disabled= true;
            });

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
