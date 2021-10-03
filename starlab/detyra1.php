<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
<tr>
	<th class="tg-0lax">Name</th>
	<th class="tg-0lax">Age</th>
	<th class="tg-0lax">School</th>
</tr>
</thead>
<tbody>

<?php

$example_json_data = '
[
{
"name" : "Starlabs",
"age" : "19",
"school" : "Digital School"
},
{
"name" : "Starlabs 1",
"age" : "21",
"school" : "Digital School Pristine"
},
{
"name" : "Starlabs 3",
"age" : "30",
"school" : "Digital School Kosovo" 
}
]
';

$php_array = json_decode($example_json_data,true);

foreach($php_array as $item) {

echo '		
<tr>
	<td class="tg-0lax">'.$item['name'].'</td>
	<td class="tg-0lax">'.$item['age'].'</td>
	<td class="tg-0lax">'.$item['school'].'</td>
</tr>';

}
?>
</tbody>
</table>