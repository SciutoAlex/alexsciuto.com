<?
preg_match('#^data:[\w/]+(;[\w=]+)*,[\w+/=%]+$#', $data=$_GET["img"])
and
copy($data, "output.png");
?>