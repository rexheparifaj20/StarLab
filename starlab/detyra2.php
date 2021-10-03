<?php

//inputi (A,C ose E)

$input = 'E';

$array = array('A','C','E');

function detyra2_start($asci_num) {
	for ($i = 1; $i <= $asci_num; $i++)
	{
		for($k = $asci_num; $k > $i; $k-- )
		{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
		for($j = 1; $j <= $i; $j++ )
		{
			echo chr(64+$j)."&nbsp;";
		}
		
		for($j = $i-1; $j >= 1; $j-- )
		{
			echo chr(64+$j)."&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}

echo '<br>';

function detyra2_end($asci_num) {
	for ($i = $asci_num; $i <= $asci_num; $i--)
	{
		for($k = $asci_num; $k > $i; $k-- )
		{
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		}
		
		for($j = 1; $j <= $i; $j++ )
		{
			echo chr(64+$j)."&nbsp;";
		}
		
		for($j = $i-1; $j >= 1; $j-- )
		{
			echo chr(64+$j)."&nbsp;&nbsp;";
		}
		echo "<br>";
	}
}

if (isset($input) && $input == 'A') 
{		
	$asci_num = 1;
} else if (isset($input) && $input == 'C') 
{
	$asci_num = 3;
} else if (isset($input) && $input == 'E') {
	$asci_num = 5;
}


detyra2_start($asci_num);
detyra2_end($asci_num);

?>