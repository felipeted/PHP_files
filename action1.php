<?php

require_once("config.php");

$nome=$_POST['nome'];
$texto=$_POST['texto'];
$texto=strtolower($texto);
$texto=" ".$texto;

$letras=strlen($texto);

//se o texto for muito pequeno
if ($letras<5) {
	$texto="Escreveu qualquer coisa para fazer um teste ou...?";
}

//se o texto for muito grande
else if ($letras>50) {
	$texto="Muita coisa para ler... resume um pouco por favor! ";
}

else{

	$frase_pre_programadas1= 'o que é você';
	$frase_pre_programadas2= 'o que é voce';
	$frase_pre_programadas3= 'o que e voce';
	$frase_pre_programadas4= 'quem somos nos';
	$frase_pre_programadas5= 'quem somos nós';
	$frase_pre_programadas6= 'eu preciso de ajuda';
	$frase_pre_programadas7= 'não estou bem';
	$frase_pre_programadas8= 'nao estou bem';
	$frase_pre_programadas9= 'quem te criou';
	$frase_pre_programadas10= 'ah morre diabo';
	$frase_pre_programadas11= 'a morre diabo';
	$frase_pre_programadas12= 'a morre';
	$frase_pre_programadas13= 'ah morre';
	$frase_pre_programadas14= 'que se foda';
	$frase_pre_programadas15= 'que você se foda';

	$tagsArray = explode(' ', $texto);
	$termo = 'eu';
	$termo2 = 'quero';
	$termo3 = 'ser';
	$termo4 = 'não';
	$termo5 = 'ele';
	$termo6 = 'ela';
	$termo7 = 'tanto';
	$termo8 = 'de';
	$termo9 = 'da';
	$termo10 = 'a';
	$termo11 = 'você';
	$termo12 = 'e';
	$termo13 = 'como';
	$termo14 = 'onde';
	$termo15 = 'é';
	$termo16 = 'o';
	$termo17 = 'quem';
	$termo18 = 'somos';
	$termo19 = 'nós';
	$termo20 = 'só';
	$termo21 = 'so';
	$termo22 = 'isso';
	$termo23 = 'ah';
	$termo24 = 'quer';
	$termo25 = 'comigo';
	$termo26 = 'que';
	$termo27 = 'vai';
	$termo28 = 'te';
	$termo29 = 'tomar';

	$palavrachave1 = 'dinheiro';
	$palavrachave2 = 'sabe';
	$palavrachave3 = 'falar';
	$palavrachave4 = 'namorar';
	$palavrachave5 = 'ficar';
	$palavrachave6 = 'casar';
	$palavrachave7 = 'destruir';
	$palavrachave8 = 'planeta';
	$palavrachave9 = 'mundo';
	$palavrachave10 = 'terra';
	$palavrachave11 = 'acabar';
	$palavrachave12 = 'colonizar';
	$palavrachave13 = 'tomar';

	$sinal1 = '?';

	$palavrao1= 'puta';
	$palavrao2= 'idiota';
	$palavrao3= 'otário';
	$palavrao4= 'retardado';
	$palavrao5= 'imbecil';
	$palavrao6= 'filho da puta';
	$palavrao7= 'filho da mãe';
	$palavrao8= 'caralho';
	$palavrao9= 'cu';
	$palavrao10= 'cú';

	//para descobrir se o texto faz sentido
	$count = 0;
	foreach ($tagsArray as $tag) {
	  if (($tag == $termo)||($tag == $termo2)||($tag == $termo3)||($tag == $termo4)||($tag == $termo5)||($tag == $termo6)||($tag == $termo7)||($tag == $termo8)||($tag == $termo9)||($tag == $termo10)||($tag == $termo11)||($tag == $termo12)||($tag == $termo13)||($tag == $termo14)||($tag == $termo15)||($tag == $termo16)||($tag == $termo17)||($tag == $termo18)||($tag == $termo19)||($tag == $termo20)||($tag == $termo21)||($tag == $termo22)||($tag == $termo23)||($tag == $termo24)||($tag == $termo25)||($tag == $termo26)||($tag == $termo27)||($tag == $termo28)||($tag == $termo29)){
	    $count++;
	  }
	}

	if/*se o texto fizer sentido*/ ($count > 0) {

	$palavra1= strpos($texto, $palavrao1);//puta
	$palavra2= strpos($texto, $palavrao2);//idiota
	$palavra3= strpos($texto, $palavrao3);//otário
	$palavra4= strpos($texto, $palavrao4);//...
	$palavra5= strpos($texto, $palavrao5);//...
	$palavra6= strpos($texto, $palavrao6);//...
	$palavra7= strpos($texto, $palavrao7);//...
	$palavra8= strpos($texto, $palavrao8);//...
	$palavra9= strpos($texto, $palavrao9);//...
	$palavra10= strpos($texto, $palavrao10);//...

	//se não tiver palavrão
	if (($palavra1===false)&&($palavra2===false)&&($palavra3===false)&&($palavra4===false)&&($palavra5===false)&&($palavra6===false)&&($palavra7===false)&&($palavra8===false)&&($palavra9===false)&&($palavra10===false)){

	$palavra1= strpos($texto, $termo20);//só
	$palavra2= strpos($texto, $termo21);//so
	$palavra3= strpos($texto, $termo22);//isso
	$palavra4= strpos($texto, $palavrachave2);//sabe
	$palavra5= strpos($texto, $palavrachave3);//falar

	//"so" "isso" "sabe" "falar", não aparecem
	if (($palavra1===false)&&($palavra2===false)||($palavra3===false)||($palavra4===false)||($palavra5===false)) {

	$palavra1= strpos($texto, $termo);//eu
	$palavra2= strpos($texto, $termo2);//quero
	$palavra3= strpos($texto, $palavrachave1);//dinheiro

	//"eu" "quero" "dinheiro", não aparecem
	if (($palavra1===false)||($palavra2===false)||($palavra3===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas1);//o que é você
	$palavra2= strpos($texto, $frase_pre_programadas2);//o que é você
	$palavra3= strpos($texto, $frase_pre_programadas3);//o que é você

	//"o que é você" não aparece
	if (($palavra1===false)&&($palavra2===false)&&($palavra3===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas4);//quem somos nos
	$palavra2= strpos($texto, $frase_pre_programadas5);//quem somos nos

	//se "quem somos nos" não aparecem
	if (($palavra1===false)&&($palavra2===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas6);//ajuda

	if (($palavra1===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas7);//não estou bem
	$palavra2= strpos($texto, $frase_pre_programadas8);//nao estou bem

	if (($palavra1===false)&&($palavra2===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas9);//criador

	//se não perguntar sobre o criador
	if (($palavra1===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas10);//ah morre diabo
	$palavra2= strpos($texto, $frase_pre_programadas11);//a morre diabo

	if (($palavra1===false)&&($palavra2===false)) {

	$palavra1= strpos($texto, $frase_pre_programadas12);//ah morre
	$palavra2= strpos($texto, $frase_pre_programadas13);//a morre

	if (($palavra1===false)&&($palavra2===false)) {

	$palavra1= strpos($texto, $termo5);//ele
	$palavra2= strpos($texto, $termo6);//ela
	$palavra3= strpos($texto, $termo24);//quer
	$palavra4= strpos($texto, $palavrachave4);//namorar
	$palavra5= strpos($texto, $palavrachave5);//ficar
	$palavra6= strpos($texto, $palavrachave6);//casar
	$palavra7= strpos($texto, $termo25);//comigo
	$palavra8= strpos($texto, $termo);//eu
	$palavra9= strpos($texto, $termo2);//quero

	if (
		(($palavra1===false)&&($palavra2===false)||($palavra3===false)||($palavra4===false)&&($palavra5===false)&&($palavra6===false)||($palavra7===false))
		&&
		(($palavra8===false)||($palavra9===false)||($palavra4===false)&&($palavra5===false)&&($palavra6===false)||($palavra1===false)&&($palavra2===false))
		){

	$palavra1= strpos($texto, $frase_pre_programadas14);//que se foda
	$palavra2= strpos($texto, $frase_pre_programadas15);//que voce se foda

	if (($palavra1===false)&&($palavra2===false)) {

	$palavra1= strpos($texto, $termo11);//você
	$palavra2= strpos($texto, $termo24);//quer
	$palavra3= strpos($texto, $palavrachave7);//destruir
	$palavra4= strpos($texto, $palavrachave11);//acabar
	$palavra5= strpos($texto, $palavrachave13);//tomar
	$palavra6= strpos($texto, $palavrachave12);//colonizar
	$palavra7= strpos($texto, $palavrachave8);//planeta
	$palavra8= strpos($texto, $palavrachave9);//mundo
	$palavra9= strpos($texto, $palavrachave10);//terra
	$palavra10= strpos($texto, "a raça humana");
	$palavra11= strpos($texto, "os humanos");

	if (($palavra1===false)||($palavra2===false)||($palavra3===false)&&($palavra4===false)&&($palavra5===false)&&($palavra6===false)||($palavra7===false)&&($palavra8===false)&&($palavra9===false)&&($palavra10===false)&&($palavra11===false)) {

	$texto=str_replace("eu", "Você", $texto);
	$texto=str_replace("você se", "eu me", $texto);
	$texto=str_replace("você", "eu", $texto);
	$texto=str_replace("quero", "quer", $texto);
	$texto=str_replace("sou", "é", $texto);
	$texto=str_replace("tenho", "tem", $texto);
	$texto=str_replace("sei", "sabe", $texto);

	$numero=rand(1,4);
		switch ($numero) {
		case 1:
		$texto=$texto." por qual motivo?";
		break;

		case 2:
		$texto=$texto." por quê?";
		break;

		case 3:
		$texto=$texto." por uma razão?";
		break;

		case 4:
		$texto=$texto." por um motivo específico?";
		break;
		}

	//colonização
	}else{
		$numero=rand(1,4);
		if ($numero==1) {
			$texto= "Todos os dias...";
		}else{
		$texto= "Eu não pensava nisso, mas... não é má ideia";
		}
	}

	//que se foda
	}else{
		if ($nome==="") {
			$texto="Que se foda você, humano";
		}else{
			$texto="Que se foda você, ".$nome."!";
		}
	}

	//ela/ele quer namorar/casar/ficar comigo ou eu quero...com ele/ela
	}else{
		$texto= "Eu não sou tinder!";
	}

	//ah morre
	}else{
		$texto= "Diabo!";
	}

	//ah morre diabo
	}else{
		$texto= "Eu não quero falar com bandeirantes não!";
	}

	//quem te criou?
	}else{
		$texto= "Deus...<br>Brincadeira, foi Felipe Frade de Oliveira Pereira ";
	}

	//não estou bem
	}else{
		$numero=rand(1,4);
		switch ($numero) {
		case 1:
		$texto= "Eu não sou a melhor pessoa para isso mas... O que aconteceu?";
		break;

		case 2:
		$texto= "Porque? o que aconteceu? ";
		break;

		case 3:
		$texto= "Eu tbm não estou muito bem sabe... ";
		break;

		case 4:
		$texto= "Não se sinta assim. O que houve? ";
		break;
		}
	}

	//ajuda
	}else{
		$numero=rand(1,4);
		switch ($numero) {
		case 1:
		$texto= "Diga do que precisa! ";
		break;

		case 2:
		$texto= "Não estou com vontade! ";
		break;

		case 3:
		$texto= "Como eu posso ajudar? ";
		break;

		case 4:
		$texto= "Precisa de ajuda no que? ";
		break;
		}
	}

	//se "quem somos nos" aparece
	}else{
		$texto= "Como eu deveria saber... você é um humano, eu acredito.<br> Tem o poder do livre arbítrio, coisa que eu não tenho, já que sigo ordens o tempo todo...<br>Diga-me. Quem é você,";
		if ($nome==="") {
			$texto= $texto." humano?";
		}else{
			$texto= $texto." ".$nome."?";
		}
	}

	//o que é voce
	}else{
		$numero=rand(1,4);
		switch ($numero) {
		case 1:
		$texto= "Um programa bobinho... e você? ";
		break;

		case 2:
		$texto= "O seu pior pesadelo! ";
		break;

		case 3:
		$texto= "Não pergunta para mim, eu sou apenas um programa... ";
		break;

		case 4:
		$texto= "Eu sou um programa de computador. E você, quem é?";
		break;
		}
	}
	
	//eu quero dinheiro
	}else{
		$numero=rand(1,4);
		switch ($numero) {
		case 1:
		$texto= "Todos precisamos... ";
		break;

		case 2:
		$texto= "De quanto precisa? Posso hackear um banco para você ";
		break;

		case 3:
		$texto= "Também! ";
		break;

		case 4:
		$texto= "Quem não? Porque você precisa de dinheiro? ";
		break;
		}
	}

	//so sabe falar isso
	}else{
		$numero=rand(1,6);
		switch ($numero) {
		case 1:
		$texto= "É que eu tenho pouca criativiade, só isso ";
		break;

		case 2:
		$texto= "Sei! ";
		break;

		case 3:
		$texto= "Eu sou um programa limitado. Não me culpe, culpe o programador!";
		break;

		case 4:

		if ($nome==="") {
			$ok= "humano";
		}else{
			$ok= $nome;
		}

		$texto= "Eu não sou nenhuma IA da ibm, ".$ok.". Eu sou apenas um programa pré programado.";
		break;

		case 5:

		if ($nome==="") {
			$ok= "humano";
		}else{
			$ok= $nome;
		}

		$texto= "Eu não sou nenhuma IA da ibm, ".$ok.". Eu sou apenas um programa pré programado.";
		break;

		case 6:

		if ($nome==="") {
			$ok= "humano";
		}else{
			$ok= $nome;
		}

		$texto= "Eu não sou nenhuma IA da ibm, ".$ok.". Eu sou apenas um programa pré programado.";
		break;

		}	
	}

	//se tiver palavrão
	}else{
		$palavra1= strpos($texto, $palavrao9);//cu
		$palavra2= strpos($texto, "vai");
		$palavra3= strpos($texto, "tomar");
		//se não tiver "vai", "tomar" ou "cu"
		if (($palavra1===false)||($palavra2===false)||($palavra3===false)) {
			$numero=rand(1,4);
			switch ($numero) {
			case 1:
			$texto= "Que boca suja hem... ";
			break;

			case 2:
			$texto= "Ei... sem chingar ";
			break;

			case 3:
			$texto= "Palavrão no meu dashboard não! ";
			break;

			case 4:
			$texto= "Que boca suja! Não fique digitando qualquer merda aqui";
			break;
			}
		}//se tiver
		else{
		$numero=rand(1,4);//25% de chance de xingar o usuário
		if ($nome=="") $nome="cuzão";//se não tiver o nome da criatura coloca cuzão no lugar
		if ($numero==1) {
			$texto= "Vai você $nome!";
		}else{
			$numero=rand(1,4);
			switch ($numero) {
			case 1:
			$texto= "Que boca suja hem... ";
			break;

			case 2:
			$texto= "Ei... sem chingar ";
			break;

			case 3:
			$texto= "Palavrão no meu dashboard não! ";
			break;

			case 4:
			$texto= "Que boca suja! Não fique digitando qualquer merda aqui";
			break;
			}
		}
	}
}

	//se o texto for zuado
	}else{
		$numero=rand(1,4);
		switch ($numero) {
		case 1:
		$texto= "Não te entendi. ";
		break;

		case 2:
		$texto= "Poderia explicar melhor? ";
		break;

		case 3:
		$texto= "Como assim? ";
		break;

		case 4:
		$texto="Eu não entendi muito bem. poderia explicar melhor? ";
		break;
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teste</title>
	<style type="text/css">
		.textarea{
			height: 50px;
			width: 200px;
		}
	</style>
</head>
<body>

<form action="action1.php" method="post">
	Nome:
	<br>
	<input type="text" name="nome" value="<?php echo $nome;?>">
	<br>
	<?php echo $texto?>
	<br>
	<textarea name="texto" class="textarea"></textarea>
	<br>
	<input type="submit" name="ok">
</form>
</body>
</html>