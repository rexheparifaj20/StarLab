<?php

function funksioni($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function enkripto($input_original, $key)
{
	$outputi = "";

	$inputi = str_split($input_original);
	foreach ($inputi as $ch)
		$outputi .= funksioni($ch, $key);
	return $outputi;
}

function dekripto($inputi_encrypted, $key)
{
	return enkripto($inputi_encrypted, 26 - $key);
}


$texti = '"Star Labs!"';
$texti_encrypted = enkripto($texti, 3);
$texti_decrypted = dekripto($texti_encrypted, 3);


echo 'Teksti origjinal: '.$texti.'<br>';
echo 'Teksti i enkriptuar: '.$texti_encrypted.'<br>';
echo 'Teksti i dekriptuar: '.$texti_decrypted;
?>