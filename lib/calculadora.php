<?php
class Calculadora {

  public function calcular($valorBruto, $juros, $dataFinal, $dataInicial) {
    $desagio = $this->getDesagio($valorBruto, $juros, $dataFinal, $dataInicial);
    $valorLiquido = $this->getValorLiquido($valorBruto, $desagio);

    return $valorLiquido;
  }

  public function getDesagio ($valorBruto, $juros, $dataFinal, $dataInicial) {
    $intervalo = $this->getIntervalo($dataFinal, $dataInicial);
    $desagio = ((($valorBruto * ($juros/100)) / 30) * $intervalo);
    return $desagio;
  }

  public function getValorLiquido($valorBruto, $desagio) {
    $valorLiquido = $valorBruto - $desagio;
    return $valorLiquido;
  }

  public function getIntervalo($dataFinal, $dataInicial) {
    if ($dataFinal != null && $dataInicial != null) {
      $intervalo = $dataFinal->diff($dataInicial);
      return $intervalo->format(('%d'));
    }
    return 0;
  }
}
?>
