<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$ts = new DateTime("1970-01-01");
$ta = new DateTime("now");
$final = new DateTime("+2 Years");
$periodo = new DateInterval("P1D");
$periodo2 = new DateInterval("P1Y");

echo "<p>programa que pega as terças feiras treze de 1970 até o ano ".$final->format("Y")."</p>";

echo "Início: ".$ts->format("d/m/Y H:i:s")."<br>";
echo "Hoje: ".$ta->format("d/m/Y H:i:s")."<br>";
echo "Fim: ".$final->format("d/m/Y H:i:s")."<br><br>";

while ($ts->format("Y")<2020) {
	while ($ts<$final) {
		$ts->add($periodo);
		if (($ts->format("l")=="Friday")&&($ts->format("d")==13)) {
			echo $ts->format("l d/m/Y")."<br>";
		}
	}
}
?>