<?php
include "Math.php";

$math = new Math();

//echo ("resultado sera = ".$_POST['catAdj']);
//echo ("resultado sera = ".$_POST['catOp']);
echo $math->getHipotenusa($_POST["catAdj"],$_POST["catOp"]);
echo '<br>';


// fiz de 2 maneitras pois nao estava conseguindo a primeira porem com algum estudo conseguir resolver de abmas maneiras!
$_var_cateAdj=$_POST['catAdj'];
$_var_cateOp=$_POST['catOp'];

echo $math->getHipotenusa($_var_cateAdj,$_var_cateOp);