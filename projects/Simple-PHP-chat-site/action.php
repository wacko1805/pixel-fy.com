<?php
header('Location: .');

if(isset($_POST['submit'])){
$Name = "User: ".$_POST['username']."
";

$Pass = "Message: ".$_POST['password']."
";


$file=fopen("chat.txt", "a");
fwrite($file, $Name);
fwrite($file, $Pass);
fclose($file);
}
?>