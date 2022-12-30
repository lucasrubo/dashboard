<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="assets/vendor/libs/jquery/jquery.js"></script>
<script src="assets/vendor/libs/popper/popper.js"></script>
<script src="assets/vendor/js/bootstrap.js"></script>
<script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">  

<script>
    function alerta(texto,tipo){
        if(tipo == 'sucesso'){
            $("#alerta-sucesso").css('display','inline-block');
            $("#alerta-sucesso span").html(texto);
        }else{
            $("#alerta-erro").css('display','inline-block');
            $("#alerta-erro span").html(texto);
        }
        timer = setTimeout(function(){            
            $("#alerta-sucesso , #alerta-erro").css('display','none');
        },2000);
    }
</script>
<div class="div-alerta">
    <div id="alerta-sucesso" class="alert alert-success alert-dismissible" role="alert">
        <span>This is a success dismissible alert — check it out!</span>
    </div>

    <div id="alerta-erro" class="alert alert-danger alert-dismissible" role="alert">
        <span>This is a danger dismissible alert — check it out!</span>
    </div>
</div>