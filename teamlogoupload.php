<?php
$valid_formats = array("jpg", "png", "gif");
$teams = array('teama', 'teamb');
$path = "overlayresources/";
$path = ".";
$max_file_size = 1024*800; // 800 kbytes

function check_file_uploaded_name($filename)
{
    (bool) ((preg_match("`^[-0-9A-Z_\.]+$`i",$filename)) ? true : false);
}

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
  echo "hi!<br>";

  foreach ($teams as &$value) {
    $tmp_name = $_FILES[$value]["tmp_name"];
    $name = $_FILES[$value]["name"];
    echo $name;


    echo "trying!";
    move_uploaded_file($tmp_name, "$path/$value.png");

    echo $_FILES[$value]['size'] . "<br>";

    // Return JSON for JQuery Statement instead of hard exit
  }





}
 ?>
