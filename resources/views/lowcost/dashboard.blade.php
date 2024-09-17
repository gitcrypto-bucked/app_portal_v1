@include('lowcost.header_lowcost')
@php(  $news =  App\Http\Controllers\ChartController::chartNoticias())
<title>Low Cost Portal.:Dashboard</title>
<!--navbar end-->
<div class="main">
    <!-- sidebar-->
    @include('lowcost.left-menu')
    <!--sidebar end-->
    <div class="d-flex row container-xxl px-5 py-3">
        <div class="row ">

            <div class="col-md-8 ">
                <h5 class="mb-3">Noticias Cadastradas</h5>
                @if(empty($news)==true)
                    <div class="alert alert-success bg-danger text-white" id="error"> {{ "Sem noticias cadastradas"  }}</div>
                @endif
                <div style=" margin: auto;">
                    <canvas id="lineChart"></canvas>
                </div>

            </div>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js"
        integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="
https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js
"></script>

<script>
    var ctx = document.getElementById('lineChart');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($news[1]),
            datasets: [{
                label: 'Noticias Cadastradas',
                data: @json($news[0]),
                backgroundColor: 'transparent',
                borderColor: '#603F8B',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
