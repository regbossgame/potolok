<table border=0 width=850px style="clear:both;" align=center><tr align=center>
<?
for($i=0;$i<count($tmen);$i++){
$tt="<a href='/?cat=".$link[$i]."' title='".$tit[$link[$i]]."'><div class='mbtn'>".$tmen[$i]."</div></a>";
if ($str==$link[$i]){$tt="<div class='mbtna'>".$tmen[$i]."</div>";}
echo "<td>
<h4>
".$tt."
</h4>
</td>
";
}
?>
</tr>
</table>