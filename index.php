<?php
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  session_start();
  include("lib/calculadora.php");

  $valorLiquido = 0;
  $desagio = 0;
  
  if ($_POST) {
    $valorBruto = $_POST['valorBruto'];
    $juros = $_POST['juros'];
    $dataFinal = new DateTime($_POST['dataFinal']);
    $dataInicial = new DateTime($_POST['dataInicial']);

    $calculadora = new Calculadora();
    $valorLiquido = $calculadora->calcular($valorBruto, $juros, $dataFinal, $dataInicial);
    $desagio = $calculadora->getDesagio($valorBruto, $juros, $dataFinal, $dataInicial);
    $_SESSION['listaCalculos'][] = [$dataInicial->format('d/m/Y'), $dataFinal->format('d/m/Y'), $valorBruto, $juros, $desagio, $valorLiquido];
  }

  if (isset($_GET['esvaziar']) && $_GET['esvaziar'] == 'true') {
    $_SESSION['listaCalculos'] = [];
    header("Location: /");
  }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>JM Fomento Mercantil</title>
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGxsbAS8vLxoyMjIkEBAQAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABVVVUDMzMzfMx/DPb/mQD//5kA/zIyMukxMTEXAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA8gAAAP9BOi+5MzMzmjMzM5f/mQD/MzMz7DMzM8IzMzOfNzc3HgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAK8FBQXvMjIyiDIyMsYAAAD/AAAA/wAAAP8AAAD/AAAA/xcXF4EzMzM5AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAANzc3FgAAAP8AAAD/znsB9sl+DdfPgQz+Dg4OBAAAAAAAAAAANDQ0MAAAAAAAAAAAAAAAAAAAAAAAAAAANTU1CgAAAP8EBATn/5kA//+ZAP/Ifg7Zz4EM/g4ODgQAAAAAAAAAADU1NSMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8gICCUAAAAAP+ZAP//mQD/t3URz9CBDP4RERECAAAAAAAAAAAmJiYHAAAAAAAAAAAAAAAAAAAAADQ0NCELCwvqAAAAAAAAAAD/mQD5/5kA/6RsF8C3dRL9EhISAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/MjIyNwAAAAAAAAAA/5kA//+ZAP+lbBa9t3US/RISEgIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/zExMUAAAAAAAAAAAAAAAAD/mQD/oWoWw7d1Ev0QEBABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA0NDQeNDQ0OQsLCwQLCwsB/5kA/21QJaefaRj8Dg4OAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAtAAAALRgOABWiaRR7o2sX/jU1NSEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAARysAP8J6DukAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP//AAD8PwAA8AcAAPADAAD8HwAA+B8AAPIfAAD2HwAA7h8AAO8fAAD/HwAA/98AAP/fAAD//wAA//8AAA==" rel="icon" type="image/x-icon" />
  </head>
  <body>
    <?php include("inc/menu.php") ?>

    <div class="alinhamento-card-table">
      <?php include("inc/form.php") ?>
      <?php include("inc/table.php") ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  <footer id="quemSomos">
    <?php include("inc/footer.php") ?>
  </footer>
 </html>