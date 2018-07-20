<?php
echo "<p>programa que pega as terças feiras treze de 1970 até o ano 2020</p>";

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

$ts = strtotime("1970-01-01");
$ta = $ts+86400;
$final = strtotime("+2 Years");

echo date("l d/m/Y", $ts)."<br>";
echo date("l d/m/Y", $ta)."<br>";
echo date("l d/m/Y", $final)."<br>";

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