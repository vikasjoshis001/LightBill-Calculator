<?php
$old_h1=$_POST['old_h1'];
$old_h2=$_POST['old_h2'];
$old_h3=$_POST['old_h3'];
$new_h1=$_POST['new_h1'];
$new_h2=$_POST['new_h2'];
$new_h3=$_POST['new_h3'];
$total_bill=$_POST['total_bill'];
$h1=$new_h1-$old_h1;
$h2=$new_h2-$old_h2;
$h3=$new_h3-$old_h3;
$total_unit=$h1+$h2+$h3;
$n=$total_bill/$total_unit;
$light_bill_h1=$n*$h1;
$light_bill_h2=$n*$h2;
$light_bill_h3=$n*$h3;
echo "Total Light Bill of House 1 is $light_bill_h1";
echo "<br/>Total Light Bill of House 2 is $light_bill_h2";
echo "<br/>Total Light Bill of House 3 is $light_bill_h3";
?>