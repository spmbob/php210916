<meta charset="utf-8">
<?php
for ($i=0,$x=0;$x<16;$x++) {
	for ($y=0;$y<16;$y++) {
		$chars[$x][$y]=array($i,chr($i));
		$i++;
	}
}
?>
<table border=1 cellpadding=1 cellspacing=0>
<?foreach ($chars as $row) {?>
	<tr>
	<?foreach ($row as $cell) {?>
	<td>
	 <?=$cell[0]?>:
	 <b><tt><?=$cell[1]?></tt></b>
	 </td>
	 <?}?>
	 </tr>
	 <?}?>
	 </table>

</br>
</br>

<?php
$str="   TEST   ";
echo trim ($str);
echo "</br>";
echo ltrim ($str);
echo "</br>";
echo chop ($str);
echo "</br>";
echo "</br>";

$st="Таким образом укрепление и развитие структуры обеспечивает широкому кругу участие в формировании дальнейших направлений развития.";
echo strlen($st);
echo "</br>";
$where="privet";
$what="ve";
echo strpos($where,$what);
echo "</br>";
$wheree="privet privet";
$whatt="ve";
echo strrpos($wheree,$whatt);
echo "</br>";
$strone="A";
$strtwo="a";
echo strcmp($strone,$strtwo);
echo "</br>";
$stronee="A";
$strtwoo="a";
echo strcasecmp($strone,$strtwo);
echo "</br>";
$substr="укрепление и развитие структуры";
echo substr($substr,23);
echo "</br>";
$text="широкому кругу лиц";
$from="кругу";
$to="квадрату";
echo str_replace($from,$to,$text);
echo "</br>";
$url="https://github.com/mittelmabigkeit";
echo urlencode($url);
echo "</br>";
echo urldecode($url);
echo "</br>";
$html="<p>sample text</p>";
echo htmlspecialchars($html);
?>