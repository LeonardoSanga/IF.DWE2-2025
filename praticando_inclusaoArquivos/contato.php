<?php
require 'header.php';
?>

<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>

    <form action="destinoContato.php" method="POST">
        <div class="row">
            <div class="col-6">
                <label class="form-label" for="nome">Nome:</label>
                <div class="input-group">
                    <input type="text" class="form-control" aria-describedby="basic-addon1" id="nome" name="nome">
                </div>
            </div>

            <div class="col-6">
                <label class="form-label" for="email">Email:</label>
                <div class="input-group">
                <input type="email" class="form-control" aria-describedby="basic-addon1" id="email" name="email">
                </div>
            </div>
        </div>

        <div class="row">
                            
            <div class="mb-3">
                <label class="form-label" for="mensagem">Mensagem:</label>
                <div class="input-group">
                    <textarea name="mensagem" id="mensagem" class="form-control" ></textarea>
                </div>
             </div>
        </div>


            <div class="d-flex justify-content-center">
                <div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>

    
     <form>

</div>

<?php
require 'footer.php';
?>