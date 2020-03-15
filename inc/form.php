<div class="card">
  <div class="card-header" id="calculo">
    Cálculo de Cheques
  </div>
  <form method="POST">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Valor do cheque: <input type="number" name="valorBruto"></li>
      <li class="list-group-item">Data Inicial: <input type="date" name="dataInicial"></li>
      <li class="list-group-item">Data Final: <input type="date" name="dataFinal"><br/></li>
      <li class="list-group-item">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Juros</label>
          </div>
          <select class="custom-select" id="inputGroupSelect01" name="juros">
            <option value="3" selected>3%</option>
            <option value="6">6%</option>
            <option value="6.5">6,5%</option>
          </select>
        </div>
      </li>
      <li class="list-group-item">Deságio: <input type="number" name="desagio" value="<?php echo $desagio ?>" disabled></li>
      <li class="list-group-item">Valor líquido: <input type="number" name="valorLiquido" value="<?php echo $valorLiquido ?>" disabled></li>
      <li class="list-group-item"> <input type="submit" value="Calcular">
    </ul>
  </form>
</div>