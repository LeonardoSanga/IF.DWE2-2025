<?php 
include 'header.php';
?>

    <style>
        body {
            background-image: linear-gradient(180deg, var(--bs-body-secondary-bg), var(--bs-body-bg) 100px, var(--bs-body-bg));
        }

        .container {
            max-width: 960px;
        }

        .pricing-header {
            max-width: 700px;
        }

        img {
            width: 400px;
            height: 400px;
        }

        .destaqueVerde {
            color: green;
        }

        .destaqueVermelho {
            color: red;
        }

    </style>

    <main>
        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Xiaomi S20</h4>
              </div>
              <img src="imagens/Xiaomi-S20.jpg" alt="">
              <div class="card-body">
                <h1 class="card-title pricing-card-title">
                  R$ 2.575,00
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Potência 55 W</li>
                  <li>Bateria de 170 minutos</li>
                  <li>Capacidade do reservatório 400ml</li>
                </ul>
                <a href="http://localhost/VTP.DWE2-2025/Prova1DW2_LeonardoMinguini/exercicio2.php?preco=2575" class="w-100 btn btn-lg btn-outline-primary">Formas de pagamento</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Eletrolux Home-E ERB40</h4>
              </div>
              <img src="imagens/Electrolux-ERB40.jpg" alt="">
              <div class="card-body">
                <h1 class="card-title pricing-card-title">
                  R$ 1.169,00
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Potência 40 W</li>
                  <li>Bateria de 120 minutos</li>
                  <li>Capacidade do reservatório 320ml</li>
                </ul>
                <a href="http://localhost/VTP.DWE2-2025/Prova1DW2_LeonardoMinguini/exercicio2.php?preco=1169" class="w-100 btn btn-lg btn-outline-primary">Formas de pagamento</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
              <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Ropo Glass 3</h4>
              </div>
              <img src="imagens/ropo-glass-3.jpg" alt="">
              <div class="card-body">
                <h1 class="card-title pricing-card-title">
                  R$ 1.399,00
                </h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>Potência 24 W</li>
                  <li>Bateria de 150 minutos</li>
                  <li>Capacidade do reservatório 600ml</li>
                </ul>
                <a href="http://localhost/VTP.DWE2-2025/Prova1DW2_LeonardoMinguini/exercicio2.php?preco=1399" class="w-100 btn btn-lg btn-outline-primary">Formas de pagamento</a>
              </div>
            </div>
          </div>
        </div>

        <?php 
        $preco = filter_input(INPUT_GET, "preco", FILTER_SANITIZE_SPECIAL_CHARS);

        $avista = $preco*95/100;
        $trezxValor = $preco/3;
        $cincox = $preco*105/100;
        $cincoxValor = $cincox/5;
        $dozex = $preco*110/100;
        $dozexValor = $dozex/12;
        $dezoitox = $preco*115/100;
        $dezoitoxValor = $dezoitox/18;

        if(isset($preco) && !empty($preco)) {
            echo "<p>O preço informado é: <strong>R$ $preco</strong></p>";
            echo "<p>As condições de pagamento são:</p>";
            echo "<ul>";
            echo "<li>à vista: <span class='destaqueVerde'>R$ $avista (5% de desconto)</span></li>";
            echo "<li>parcelado em 3x de <strong>R$ $trezxValor</strong> totalizando <strong>R$ $preco</strong></li>";
            echo "<li>parcelado em 5x de <span class='destaqueVermelho'>R$ $cincoxValor</span> totalizando <span class='destaqueVermelho'>R$ $cincox (5% de acréscimo)</span></li>";
            echo "<li>parcelado em 5x de <span class='destaqueVermelho'>R$ $dozexValor</span> totalizando <span class='destaqueVermelho'>R$ $dozex (10% de acréscimo)</span></li>";
            echo "<li>parcelado em 5x de <span class='destaqueVermelho'>R$ $dezoitoxValor</span> totalizando <span class='destaqueVermelho'>R$ $dezoitox (15% de acréscimo)</span></li>";
        }
        ?>

    </main>
</body>
</html>