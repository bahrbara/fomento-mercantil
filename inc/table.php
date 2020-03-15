<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Data Inicial</th>
            <th scope="col">Data Final</th>
            <th scope="col">Valor Bruto</th>
            <th scope="col">Juros</th>
            <th scope="col">Deságio</th>
            <th scope="col">Valor Líquido</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($_SESSION['listaCalculos'] as $key => $calculo): ?>
              <tr>
                <th scope="row"><?php echo $key+1 ?></th>
                <td><?php echo $calculo[0] ?></td>
                <td><?php echo $calculo[1] ?></td>
                <td><?php echo $calculo[2] ?></td>
                <td><?php echo $calculo[3] ?></td>
                <td><?php echo $calculo[4] ?></td>
                <td><?php echo $calculo[5] ?></td>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>