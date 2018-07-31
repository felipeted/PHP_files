<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$ts = strtotime("1970-01-01");
$ta = strtotime("now");
$final = strtotime("+2 Years");

echo "<p>programa que pega as terças feiras treze de 1970 até o ano ".date("Y" , $final)."</p>";

echo "Início: ".date("l d/m/Y", $ts)."<br>";
echo "Hoje: ".date("l d/m/Y", $ta)."<br>";
echo "Fim: ".date("l d/m/Y", $final)."<br><br>";

while (date("Y", $ts)<2020) {
	while ($ts<$final) {
		$ts+=86400;
		if ((date("l",$ts)=="Friday")&&(date("d", $ts)==13)) {
			echo date("l d/m/Y", $ts)."<br>";
		}
	}
	$final+=strtotime("+1 Years");
}
?>
