<?php 
include 'header.php';
?>

    <div class="containerPrincipal">
        <form action="exercicio1_destino.php" method="POST">

            <div class="row">

                <div class="col-3">
                    <label class="form-label" for="nquadrados">N° de quadrados:</label>
                    <input type="number" class="form-control" aria-describedby="basic-addon1" id="nquadrados" name="nquadrados" required>
                </div>
                
                <div class="col-2">
                    <label class="form-label" for="corfundo">Cor de fundo:</label>
                    <input type="color" class="form-control" aria-describedby="basic-addon1" id="corfundo" name="corfundo">
                </div>
            </div>

            <div class="row">

                <div class="col-3">
                    <label class="form-label" id="labelAlinhamento">Alinhamento:</label><br>
                    <input type="radio" name="alinhamento" id="horizontal" value="horizontal"><label for="horizontal"> Horizontal</label> 
                    <input type="radio" name="alinhamento" id="vertical" value="vertical"><label for="vertical"> Vertical</label>
                </div>
                
                <div class="col-2">
                    <label class="form-label" for="cortexto">Cor de Texto/Borda:</label>
                    <input type="color" class="form-control" aria-describedby="basic-addon1" id="cortexto" name="cortexto">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>

        </form>
    </div>
</body>
</html>