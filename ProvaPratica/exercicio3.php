<?php 
include 'header.php';
?>

    <style>
        .containerPrincipal {
            width: 40vw;
            margin-left: 20vw;
        }
    </style>

    <div class="containerPrincipal">
        <form action="exercicio3_destino.php" method="POST">

            <div class="mb-3">
                <label class="form-label" for="titulo">Título da página:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="titulo" name="titulo" required>
                </div>
            </div>

            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label" for="corpo">Corpo:</label>
                    <div class="input-group">
                        <textarea name="corpo" id="corpo" class="form-control" required></textarea>
                    </div>
                </div>
            </div>


            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label" for="imagem">Imagem:</label>
                    <div class="input-group">
                        <input type="url" class="form-control" aria-describedby="basic-addon1" id="imagem" name="imagem" required>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label">Posição da imagem:</label>
                        <input type="radio" name="posicao" value="esquerda" id="esquerda" required><label for="esquerda"> esquerda</label>
                        <input type="radio" name="posicao" value="direita" id="direita" required><label for="direita"> direita</label>
                </div>
            </div>

            <div class="row">
                
                <div class="mb-3">
                    <label class="form-label" for="cor_planoFundo">Cor de plano de fundo da página:</label>
                    <div class="input-group">
                        <input type="color" class="form-control" aria-describedby="basic-addon1" id="cor_planoFundo" name="cor_planoFundo" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>

        </form>
    </div>

</body>
</html>