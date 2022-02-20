<?php
$html = file_get_contents('https://economia.uol.com.br/cotacoes/');
$dolar = NULL;
$euro = NULL;
$peso = NULL;
$moedas = array(NULL, NULL, NULL);

function getMoedas($conteudo)
{
    $needle = "</span> R$ ";
    $lastPos = 0;
    $positions = array();

    while (($lastPos = strpos($conteudo, $needle, $lastPos)) !== false)
    {
        $positions[] = $lastPos;
        $lastPos = $lastPos + strlen($needle);
    }
    $cont = 0;
    global $moedas;
    foreach ($positions as $value)
    {
        $teste = substr($conteudo, ($value + strlen($needle)), 5);
        $moedas[$cont] = $teste;
        //echo "==> $moedas[$cont]";
        $cont++;
    }
    return 0;
}

getMoedas($html);
$dolar = $moedas[0];
$euro = $moedas[2];
$peso = $moedas[1];
echo '<div id="dolar" class="moedas"><img src="images/dollar.png"></img><span>Dólar R$ '.$dolar.'</span></div><!--
      --><div id="euro" class="moedas"><img src="images/dollar.png"></img><span>Euro R$ '.$euro.'</span></div><!--
      --><div id="Yen" class="moedas"><img src="images/dollar.png"></img><span>Peso R$ '.$peso.'</span></div>';
?>

