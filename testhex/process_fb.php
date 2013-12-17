<?
$filename = "output" . $_POST["time"] . ".png";
preg_match('#^data:[\w/]+(;[\w=]+)*,[\w+/=%]+$#', $data=$_POST["image"])
and
copy($data, $filename);

include('SimpleImage.php');
   $image = new SimpleImage();
   $image->load($filename);
   $image->resizeToWidth(700);
   $image->save($filename);
?>