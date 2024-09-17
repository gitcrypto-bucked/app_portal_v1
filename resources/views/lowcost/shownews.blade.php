@include('lowcost.header_lowcost')
@php(  $news =  App\Http\Controllers\NewsController::getAllNews())
<title>Low Cost Portal.:Noticias</title>
<head>
    <style>
        .w-5,
        .h-5
        {
            height: 10px !important;
        }

        .text-sm, .font-medium
        {
            color:black !important;
        }

        .relative
        {
            color: blue !important;
            text-decoration: none;
            font-weight: 450;
        }

        .flex-1
        {
            display: none !important;
        }

    </style>
</head>
<!--navbar end-->
<div class="main">
    <!-- sidebar-->
        @include('lowcost.left-menu')

    <!--sidebar end-->
    <div class="d-flex row container-xxl px-5 py-3">
        <div class="row ">

            <div class="col-md-8 ">
                <h5 class="mb-3">Noticias Cadastradas</h5>
                @if(sizeof($news)<=0)
                    <div class="alert alert-success bg-danger text-white" id="error"> {{ "Sem noticias cadastradas"  }}</div>
                @endif
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
                <table style="width:120%">
                    <tr >
                        <th style="padding-bottom: 5px"></th>
                        <th style="padding-bottom: 5px"></th>
                    </tr>
                @for($i=0; $i<sizeof($news); $i++)
                        <tr>
                            <td>
                                <figure class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="{{asset('storage/thumb/'.$news[$i]->thumb)}}" alt="" height="80" class="news-img">
                                    </div>
                                    <div class="ms-3">
                                        <div class="text-nowrap " style="width: 3rem;">
                                            <date>{{date('d/m/Y',strtotime($news[$i]->created_at))}}&nbsp;</date><bold>{{$news[$i]->title}}</bold>
                                        </div>
                                        <p class="smalltext">{{$news[$i]->intro}}&nbsp;<a class="link" href="{{$news[$i]->url}}" target="_blank">...Continuar lendo...</a></p>
                                    </div>
                                </figure>
                            </td>
                            <td >
                                <a href='{{route('rem_news',['id'=> $news[$i]->id])}}' class="btn btn-primary" >Desativar</a>
                            </td>
                        </tr>
                @endfor
                </table>
{{--                {!!$news->links() !!}--}}
                {{ $news->appends(request()->except('page'))->links() }}
            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>
<script>

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
