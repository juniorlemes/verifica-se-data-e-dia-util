<?php 

if(dataDiaUtil('2024-03-09')) {
          echo 'É dia útil.';
}else{
          echo 'Não é um dia útil';
}

/**
  * A função `dataDiaUtil` em PHP verifica se uma determinada data é um dia útil ou não. Nela, sábado pode ser
  * considerado um dia útil ou não, dependendo do parâmetro opcional.
  *
  * @param dtAtual O parâmetro `$dtAtual` representa a data que você deseja verificar se é
  * um dia útil ou não.
  * @param $sabadoDiaUtil O parâmetro `$bSabadoEhDiaUtil` na função é uma
  * flag booleana que determina se o sábado deve ser considerado como um dia útil ou não. Por
  * padrão, é definido como `false`, significando que sábado não é considerado um dia útil.
  *
  * @return A função `dataDiaUtil` retorna um valor booleano indicando se a data fornecida
  * é um dia útil.
  */
function dataDiaUtil($dtAtual, $sabadoDiaUtil = false) {
	if (!is_numeric($dtAtual)) {
		$dtAtual = strtotime($dtAtual);
	}
	$diaSemana = date('w', $dtAtual);
	return $diaSemana != 0/*Domingo*/ && ($sabadoDiaUtil || $diaSemana != 6)/*Sábado*/;
}